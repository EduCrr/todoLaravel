<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css"/>
    <title>TodoApp</title>
</head>
<body>
    <div class="container">
        <div class="sideBar">
            <img src="/assets/images/logo.png"/>
        </div>
        <div class="content">
            <nav>
                <a href="#">Criar tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graphHeader">
                        <div class="progress">
                            <h2>Progresso do dia</h2>
                        </div>
                        <span class="line"></span>
                        <div class="date">
                            <img src="/assets/images/icon-prev.png"/>
                              19
                            <img src="/assets/images/icon-next.png"/>
                        </div>
                    </div>
                    <div class="graphSubtitle">tarefas 
                    </div>
                    <div class="graphPlaceholder"></div>
                    <div class="tasksLeftFooter">
                        <img src="/assets/images/icon-info.png"/>
                        Restam 3 tarefas
                    </div>
                </section>
                <section class="list">
                   <div class="listHeader">
                        <select class="listSelect">
                            <option value="1">Todas as tarefas</option>
                        </select>
                   </div>
                   <div class="taskList">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox"/>
                                <div class="taskTitle">titulo</div>
                            </div>
                            <div class="priotity">
                                <div class="sphere"></div>
                              <div>titulo</div>
                            </div>
                             <div class="actions">
                               <a href="#"> <img src="/assets/images/icon-edit.png"/></a>
                               <a href="#"> <img src="/assets/images/icon-delete.png"/></a>
                            </div>
                        </div>
                   </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>