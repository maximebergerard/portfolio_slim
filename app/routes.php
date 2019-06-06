<?php

// Home
$app
    ->get(
        '/',
        function($request, $response)
        {
            $query = $this->db->query('SELECT * FROM projects');
            $projects = $query->fetchAll();

            // View data
            $viewData = [];
            $viewData['projects'] = $projects;
            $viewData['title'] = 'Maxime Bergerard';

            

            return $this->view->render($response, 'pages/home.twig', $viewData);
        }
    )
    ->setName('home')
;

$app
    ->get(
        '/works',
        function($request, $response)
        {
            $query = $this->db->query('SELECT * FROM projects');
            $projects = $query->fetchAll();

            // View data
            $viewData = [];
            $viewData['projects'] = $projects;

            return $this->view->render($response, 'pages/works.twig', $viewData);
        }
    )
    ->setName('works')
;


