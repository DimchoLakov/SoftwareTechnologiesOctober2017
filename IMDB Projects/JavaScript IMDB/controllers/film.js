const Film = require('../models/Film');

module.exports = {
    index: (req, res) => {
        Film.find({}).then(films => {
            res.render("film/index", {films});
        });
    },

    createGet: (req, res) => {
        res.render("film/create");
    },

    createPost: (req, res) => {
        let film = req.body;
        Film.create(film).then(film => {
            res.redirect("/");
        }).catch(err => {
            film.error = "Invalid form data!Cannot create film.";
            res.render("film/create", film);
        })
    },

    editGet: (req, res) => {
        let filmId = req.params.id;
        Film.findById(filmId).then(film => {
            if (film) {
                res.render("film/edit", film);
            } else {
                res.redirect("/");
            }
        }).catch(err => res.redirect("/"));
    },

    editPost: (req, res) => {
        let filmdId = req.params.id;
        let film = req.body;
        Film.findByIdAndUpdate(filmdId, film, {runValidators: true}).then(film => {
            res.redirect("/");
        }).catch(err => {
            film.id = filmdId;
            film.error = "Cannot edit film.";
            res.render("film/edit", film);
        })
    },

    deleteGet: (req, res) => {
        let filmId = req.params.id;
        Film.findById(filmId).then(f => {
            res.render("film/delete", f);
        })
    },

    deletePost: (req, res) => {
        let filmId = req.params.id;
        Film.findByIdAndRemove(filmId).then(f => {
            res.redirect("/");
        }).catch(err => res.redirect('/'));
    }
};