# livio-rodrigues
Meu Curriculo em modelo web, atualizado atraves de integração continua.

No momento foi usado booststrap + PHP 

Production
https://livio-rodrigues.herokuapp.com/

Staging
https://livio-rodrigues-staging.herokuapp.com/

FORK
livio-rodrigues/livio-rodrigues
forked from livioweb/livio-rodrigues

Processos de Reviews Apps + Staging + Production
 
[branch "master"]

[remote "origin"]

        url = https://github.com/livio-rodrigues/livio-rodrigues.git
        fetch = +refs/heads/*:refs/remotes/origin/*
[remote "upstream"]

        url = https://github.com/livioweb/livio-rodrigues.git
        fetch = +refs/heads/*:refs/remotes/upstream/*
[remote "staging"]

        url = https://git.heroku.com/livio-rodrigues-staging.git
        fetch = +refs/heads/*:refs/remotes/staging/*
[remote "heroku"]

        url = https://git.heroku.com/livio-rodrigues-staging.git
        fetch = +refs/heads/*:refs/remotes/heroku/* 


Na criação do pipeline, pra fazer o fork do app para staging precisamos instalar um plugin
heroku plugins:install heroku-fork 