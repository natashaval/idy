<?php
namespace Idy\Idea\Controllers\Forms;

use Phalcon\Forms\Form;

class IdeaForm extends Form {
    
    public function initialize() {

        $this->add (
            new Text ('ideaTitle')
        );

        $this->add (
            new TextArea('ideaDescription')
        );

        $this->add (
            new Text ('authorName')
        );
        
        $this->add (
            new Text ('authorEmail')
        );
    }
}