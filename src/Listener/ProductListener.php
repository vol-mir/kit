<?php

namespace App\Listener;

use App\Entity\Product;
use App\Entity\Comment;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Doctrine\ORM\Mapping as ORM;

class ProductListener
{
	private $entityManager;

	private $logger;

	private $security;

	private $commentProductGroup;
	private $commentProductType;
	private $commentProductKind;
    private $commentProductCategory;
    private $commentCalculation;
    private $commentAnalyticGroup;
    private $commentFinanceGroup;

    public function __construct(
    	LoggerInterface $logger, 
    	EntityManagerInterface $entityManager,
    	Security $security
    )
    {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
        $this->security = $security;
    }


	public function preUpdate(Product $product, PreUpdateEventArgs  $event)
    {

    	$this->commentProductGroup = null;
		$this->commentProductType = null;
		$this->commentProductKind = null;
        $this->commentCalculation = null;

		$this->commentAnalyticGroup = null;
        $this->commentFinanceGroup = null;

        if ($event->hasChangedField('product_group')) {
    		$oldValue = $event->getOldValue('product_group');
    		$newValue = $event->getNewValue('product_group');

    		$comment = new Comment();
    		$comment->setNameEntity('Product');
    		$comment->setIdEntity($product->getId());
    		$comment->setDescription('Изменение группы с ' . $oldValue->getName() . ' на ' . $newValue->getName());
    		$comment->setUser($this->security->getUser());
    		$this->commentProductGroup = $comment;
		}
		if ($event->hasChangedField('product_type')) {
    		$oldValue = $event->getOldValue('product_type');
    		$newValue = $event->getNewValue('product_type');

    		$comment = new Comment();
    		$comment->setNameEntity('Product');
    		$comment->setIdEntity($product->getId());
    		$comment->setDescription('Изменение типа с ' . $oldValue->getName() . ' на ' . $newValue->getName());
    		$comment->setUser($this->security->getUser());
    		$this->commentProductType = $comment;
		}
		if ($event->hasChangedField('product_kind')) {
    		$oldValue = $event->getOldValue('product_kind');
    		$newValue = $event->getNewValue('product_kind');

    		$comment = new Comment();
    		$comment->setNameEntity('Product');
    		$comment->setIdEntity($product->getId());
    		$comment->setDescription('Изменение вида с ' . $oldValue->getName() . ' на ' . $newValue->getName());
    		$comment->setUser($this->security->getUser());
    		$this->commentProductKind = $comment;
		}
        if ($event->hasChangedField('product_category')) {
            $oldValue = $event->getOldValue('product_category');
            $newValue = $event->getNewValue('product_category');

            $comment = new Comment();
            $comment->setNameEntity('Product');
            $comment->setIdEntity($product->getId());
            $comment->setDescription('Изменение категории с ' . $oldValue->getName() . ' на ' . $newValue->getName());
            $comment->setUser($this->security->getUser());
            $this->commentProductCategory = $comment;
        }

        if ($event->hasChangedField('calculation'))  {
            $oldValue = $event->getOldValue('calculation');
            $newValue = $event->getNewValue('calculation');

            $comment = new Comment();
            $comment->setNameEntity('Product');
            $comment->setIdEntity($product->getId());
            $comment->setDescription('Изменение калькуляции с ' . $oldValue->getName() . ' на ' . $newValue->getName());
            $comment->setUser($this->security->getUser());
            $this->commentCalculation = $comment;
        }

        if ($event->hasChangedField('analytic_group'))  {
            $oldValue = $event->getOldValue('analytic_group');
            $newValue = $event->getNewValue('analytic_group');

            $comment = new Comment();
            $comment->setNameEntity('Product');
            $comment->setIdEntity($product->getId());
            $comment->setDescription('Изменение группы аналит. учета с ' . $oldValue->getName() . ' на ' . $newValue->getName());
            $comment->setUser($this->security->getUser());
            $this->commentAnalyticGroup = $comment;
        }
        if ($event->hasChangedField('finance_group'))  {
            $oldValue = $event->getOldValue('finance_group');
            $newValue = $event->getNewValue('finance_group');

            $comment = new Comment();
            $comment->setNameEntity('Product');
            $comment->setIdEntity($product->getId());
            $comment->setDescription('Изменение группы фин. учета с ' . $oldValue->getName() . ' на ' . $newValue->getName());
            $comment->setUser($this->security->getUser());
            $this->commentFinanceGroup = $comment;
        }

    }

    public function postUpdate()
    {
   
    	if ($this->commentProductGroup) {
        	$this->entityManager->persist($this->commentProductGroup);
        }
    	if ($this->commentProductType) {
        	$this->entityManager->persist($this->commentProductType);
        }
    	if ($this->commentProductKind) {
        	$this->entityManager->persist($this->commentProductKind);
        }
        if ($this->commentProductCategory) {
            $this->entityManager->persist($this->commentProductCategory);
        }
        if ($this->commentCalculation) {
            $this->entityManager->persist($this->commentCalculation);
        }

        if ($this->commentAnalyticGroup) {
            $this->entityManager->persist($this->commentAnalyticGroup);
        }
        if ($this->commentFinanceGroup) {
            $this->entityManager->persist($this->commentFinanceGroup);
        }
        $this->entityManager->flush();

        $this->commentProductGroup = null;
		$this->commentProductType = null;
		$this->commentProductKind = null;
        $this->commentProductCategory = null;
        $this->commentCalculation = null;

        $this->commentAnalyticGroup = null;
        $this->commentFinanceGroup = null;
	}


}