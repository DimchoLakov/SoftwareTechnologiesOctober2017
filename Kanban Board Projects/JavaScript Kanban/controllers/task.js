const Task = require('../models/Task');

module.exports = {
    index: (req, res) => {
        Task.find().then(tasks => {
            let openTasks = [];
            let inProgressTasks = [];
            let finishedTasks = [];

            for (let i = 0; i < tasks.length; i++) {
                let currentTask = tasks[i];

                if (currentTask.status === 'Open') {
                    openTasks.push(currentTask);
                } else if (currentTask.status === 'In Progress') {
                    inProgressTasks.push(currentTask);
                } else if (currentTask.status === 'Finished') {
                    finishedTasks.push(currentTask);
                }
            }

            res.render('task/index', {
                'openTasks': openTasks,
                'inProgressTasks': inProgressTasks,
                'finishedTasks': finishedTasks
            });
        });
    },

    createGet: (req, res) => {
        res.render("task/create");
    },

    createPost: (req, res) => {
        let task = req.body;

        if (task === null) {
            res.render("task/create", task);
        }
        Task.create(task);
        res.redirect("/");
    },

    editGet: (req, res) => {
        let taskId = req.params.id;
        Task.findById(taskId).then(task => {
            res.render("task/edit", task);
        })
    },

    editPost: (req, res) => {
        let taskId = req.params.id;
        let task = req.body;
        Task.findOneAndUpdate(taskId, task).then(() => {
            res.redirect("/");
        })
    }
};