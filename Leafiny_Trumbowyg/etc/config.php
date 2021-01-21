<?php

$config = [
    'page' => [
        '/admin/*/trumbowyg/file/upload/' => [
            'class'    => Trumbowyg_Page_Backend_File_Upload::class,
            'template' => null,
        ],
        '/admin/*/js/trumbowyg.js' => [
            'class'    => Trumbowyg_Page_Backend_Js::class,
            'content'  => 'Leafiny_Trumbowyg::backend/page/script.js.twig',
            'template' => 'Leafiny_Trumbowyg::backend/blank.twig',
        ],
    ],

    'block' => [
        'admin.head' => [
            'stylesheet' => [
                'Leafiny_Trumbowyg::backend/css/trumbowyg/trumbowyg.min.css' => 320,
                'Leafiny_Trumbowyg::backend/css/style.css' => 330,
            ],
            'javascript' => [
                'Leafiny_Trumbowyg::backend/js/jquery-3.5.1.min.js' => 200,
                'Leafiny_Trumbowyg::backend/js/trumbowyg/trumbowyg.min.js' => 210,
                'Leafiny_Trumbowyg::backend/js/trumbowyg/plugins/upload/trumbowyg.upload.js' => 220,
            ],
            'children' => [
                'admin.head.trumbowyg' => 210,
            ],
        ],
        'admin.script' => [
            'javascript' => [
                'Leafiny_Trumbowyg::backend/js/app.js' => 210
            ],
        ],
        'admin.head.trumbowyg' => [
            'template' => 'Leafiny_Trumbowyg::backend/block/include.twig',
            'context'  => Backend_Page_Admin_Page_Abstract::CONTEXT_BACKEND,
        ],
        'admin.default.form.editor' => [
            'disabled' => true,
        ],
        'admin.category.form.editor' => [
            'disabled' => true,
        ],
        'admin.catalog.product.form.editor' => [
            'disabled' => true,
        ],
        'admin.cms.form.editor' => [
            'disabled' => true,
        ],
        'admin.blog.form.editor' => [
            'disabled' => true,
        ]
    ]
];
