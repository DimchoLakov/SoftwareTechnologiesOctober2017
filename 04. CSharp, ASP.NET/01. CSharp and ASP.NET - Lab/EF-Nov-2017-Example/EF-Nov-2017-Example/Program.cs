using System;
using System.Collections.Generic;

namespace EF_Nov_2017_Example
{
    class Program
    {
        static void Main(string[] args)
        {
            var db = new BlogDbContext();

            //db.Articles.Add(new Article
            //{
            //    Content = "New Article",
            //    Title = "My first Article",
            //    DateTime = DateTime.Now,
            //    Author = new User
            //    {
            //        FullName = "Pesho Peshev",
            //        Username = "pesho123",
            //        PasswordHash = "kwqdjpoqwjpqwo"
            //    }
            //});
            //
            //db.Articles.Add(new Article
            //{
            //    Content = "Second Article",
            //    Title = "My Second Article",
            //    DateTime = DateTime.Now,
            //    Author = new User
            //    {
            //        FullName = "Gosho Goshev",
            //        Username = "gosho123",
            //        PasswordHash = "kwdqwdqwdqwqdjpoqwjpqwo"
            //    }
            //});

            //db.Articles.Add(new Article
            //{
            //    Content = "Some info here",
            //    Title = "My third article"
            //});

            //db.SaveChanges();

            foreach (User user in db.Users)
            {
                Console.WriteLine($"Username is: {user.Username}");
                Console.WriteLine($"Full name: {user.FullName}");
                Console.WriteLine($"Password: {user.PasswordHash}");
                Console.WriteLine($@"\\\\\\\\\\\\\\\\\\\\\\\\\\\\");
            }
            Console.WriteLine($"{new string(' ', 30)}");
            foreach (Article article in db.Articles)
            {
                Console.WriteLine($"Title: {article.Title}");
                Console.WriteLine($"Content: {article.Content}");
                Console.WriteLine($"Date and Time: {article.DateTime}");
                Console.WriteLine($"The author is: {article.Author?.Username}");
                Console.WriteLine($"{new string('-', 30)}");
            }

        }
    }
}
