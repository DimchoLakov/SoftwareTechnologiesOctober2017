using Blog.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web.Mvc;

namespace Blog.Controllers
{
    public class ArticleController : Controller
    {
        // GET: Article
        public ActionResult Index()
        {
            return RedirectToAction("List");
        }

        // GET: Article/List
        public ActionResult List()
        {
            using (var db = new BlogDbContext())
            {
                List<Article> articles = db.Articles
                    .Include(a => a.Author)
                    .ToList();

                return View(articles);
            }
        }

        // GET: Article/Details
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            //Get article from database
            using (var db = new BlogDbContext())
            {
                Article article = db.Articles
                    .Where(i => i.Id == id)
                    .Include(a => a.Author)
                    .First();
                if (article == null)
                {
                    return HttpNotFound();
                }
                return View("Details", article);
            }
        }

        // GET: Article/Create
        [Authorize]
        public ActionResult Create()
        {
            return View();
        }

        // POST: Article/Create
        [HttpPost]
        [Authorize]
        public ActionResult Create(Article article)
        {
            if (ModelState.IsValid)
            {
                using (var db = new BlogDbContext())
                {
                    string authorId = db.Users.Where(u => u.UserName == this.User.Identity.Name).First().Id;

                    article.AuthorId = authorId;

                    db.Articles.Add(article);
                    db.SaveChanges();

                    return RedirectToAction("Index");
                }
            }

            return View(article);
        }

        //GET: Article/Delete
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var db = new BlogDbContext())
            {
                Article article = db.Articles
                    .Where(a => a.Id == id)
                    .Include(a => a.Author)
                    .First();

                if (! IsAuthorizedToEdit(article))
                {
                    return new HttpStatusCodeResult(HttpStatusCode.Forbidden);
                }

                if (article == null)
                {
                    return HttpNotFound();
                }

                return View(article);
            }
        }

        // POST: Article/Delete
        [HttpPost]
        [ActionName("Delete")]
        public ActionResult DeleteConfirmed(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var db = new BlogDbContext())
            {
                Article article = db.Articles.Where(ar => ar.Id == id).Include(a => a.Author).First();

                if (article == null)
                {
                    return HttpNotFound();
                }

                db.Articles.Remove(article);
                db.SaveChanges();

                return RedirectToAction("Index");
            }
        }

        // GET: Article/Edit
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }

            using (var db = new BlogDbContext())
            {
                Article article = db.Articles.Where(ar => ar.Id == id).Include(a => a.Author).First();

                if (article == null)
                {
                    return HttpNotFound();
                }

                if (! IsAuthorizedToEdit(article))
                {
                    return new HttpStatusCodeResult(HttpStatusCode.Forbidden);
                }

                var model = new ArticleViewModel();

                model.Id = article.Id;
                model.Title = article.Title;
                model.Content = article.Content;

                return View(model);
            }
        }

        // POST: Article/Edit
        [HttpPost]
        [ActionName("Edit")]
        public ActionResult Edit(ArticleViewModel model)
        {
            if (ModelState.IsValid)
            {
                using (var db = new BlogDbContext())
                {
                    Article article = db.Articles.Where(a => a.Id == model.Id).First();

                    article.Title = model.Title;
                    article.Content = model.Content;

                    db.Entry(article).State = EntityState.Modified;
                    db.SaveChanges();

                    return RedirectToAction("Index");
                }
            }

            return View(model);
        }

        public bool IsAuthorizedToEdit(Article article)
        {
            bool isAdmin = this.User.IsInRole("Admin");
            bool isAuthor = article.IsAuthor(this.User.Identity.Name);

            return isAuthor || isAdmin;
        }

        private void HttpStatusCodeResult(object badRe)
        {
            throw new NotImplementedException();
        }
    }
}