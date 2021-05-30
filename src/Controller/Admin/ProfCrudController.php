<?php

namespace App\Controller\Admin;

use App\Entity\Prof;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProfCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Prof::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
