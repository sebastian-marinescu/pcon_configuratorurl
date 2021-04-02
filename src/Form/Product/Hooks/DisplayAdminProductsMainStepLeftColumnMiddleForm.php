<?php
        
    namespace PrestaShop\Module\Democustomfields17\Form\Product\Hooks;

    use PrestaShop\Module\Democustomfields17\Form\Product\Hooks\HookFormInterface;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Module;

    class DisplayAdminProductsMainStepLeftColumnMiddleForm implements HookFormInterface
    {
        public function addCustomFields(FormBuilderInterface $builder, Module $module) :FormBuilderInterface
        {
            $builder
                ->add('displayadminproductsmainstepLeftcolumnmiddleform', TextType::class, array(
                        'label' => $module->l('DisplayAdminProductsMainStepLeftColumnMiddleForm'),
                        'attr' => array(
                            'class' => 'my-custom-class',
                            'data-hex'=> 'true'
                        )
                ));
                    
            return $builder;
        }
    }
