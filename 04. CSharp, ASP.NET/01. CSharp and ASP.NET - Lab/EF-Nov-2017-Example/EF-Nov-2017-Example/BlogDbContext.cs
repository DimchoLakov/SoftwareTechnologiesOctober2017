using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Data.Entity;

namespace EF_Nov_2017_Example
{
    class BlogDbContext : DbContext
    {
        public virtual DbSet<Article> Articles { get; set; }
        public virtual DbSet<User> Users { get; set; }
    }

    class User
    {
        public int Id { get; set; }

        [Required]
        [MinLength(1), MaxLength(30)]
        [Index(IsUnique = true)]
        public string Username { get; set; }

        [Required]
        public string PasswordHash { get; set; }
        public string FullName { get; set; }
        public virtual ICollection<Article> Articles { get; set; }

    }

    class Article
    {
        public int Id { get; set; }
        [Required]
        public string Title { get; set; }
        [Required]
        public string Content { get; set; }
        public DateTime? DateTime { get; set; }
        public int? AuthorId { get; set; }
        public virtual User Author { get; set; }
    }
}
