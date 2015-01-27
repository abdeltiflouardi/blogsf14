<?php

/**
 * @author ouardisoft
 * 4 févr. 2011
 * 18:47:41
 */
class ArticleActions extends sfActions {

    public function executeIndex(sfWebRequest $request) {

	if ($request->hasParameter('id')) {
	    $post = Doctrine::getTable('Post')->find($request->getParameter('id'));

	}
	
	$this->form = new PostForm();

	if ($request->isMethod('post')) {
	    $this->form->bind($request->getParameter('post'));
	    if ($this->form->isValid()) {
		$post_data = $request->getParameter('post');
		
		$post = new Post();
		$post->setCategoryId($post_data['category_id']);
		$post->setTitle($post_data['title']);
		$post->setBody($post_data['body']);
		$post->save();
	    }
	}
    }

}

?>
