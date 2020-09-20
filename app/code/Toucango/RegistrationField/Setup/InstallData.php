<?php

namespace Toucango\RegistrationField\Setup;

use Magento\Customer\Model\Customer;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements \Magento\Framework\Setup\InstallDataInterface
{
    private $eavSetupFactory;

    private $eavConfig;

    private $attributeResource;

    /**
     * InstallData constructor.
     * @param \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory
     * @param \Magento\Eav\Model\Config $eavConfig
     * @param \Magento\Customer\Model\ResourceModel\Attribute $attributeResource
     */
    public function __construct(
        \Magento\Eav\Setup\EavSetupFactory $eavSetupFactory,
        \Magento\Eav\Model\Config $eavConfig,
        \Magento\Customer\Model\ResourceModel\Attribute $attributeResource
    )
    {
        $this->eavSetupFactory = $eavSetupFactory;
        $this->eavConfig = $eavConfig;
        $this->attributeResource = $attributeResource;
    }

    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $contactField = "customer_contact_number";
        $contactFieldLabel = "Contact Number";
        $genderField = "customer_gender";
        $genderFieldLabel = "Gender";
        $ageField = "customer_age";
        $ageFieldLabel = "Age";

        $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

        $eavSetup->removeAttribute(Customer::ENTITY, $contactField);
        $eavSetup->removeAttribute(Customer::ENTITY, $genderField);
        $eavSetup->removeAttribute(Customer::ENTITY, $ageField);
        $attributeSetId = $eavSetup->getDefaultAttributeSetId(Customer::ENTITY);
        $attributeGroupId = $eavSetup->getDefaultAttributeGroupId(Customer::ENTITY);

        $eavSetup->addAttribute(Customer::ENTITY, $contactField, [
            // Attribute parameters
            'type' => 'varchar',
            'label' => $contactFieldLabel,
            'input' => 'text',
            'required' => true,
            'visible' => true,
            'user_defined' => true,
            'sort_order' => 990,
            'position' => 990,
            'system' => 0,
        ]);
        $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, $contactField);
        $attribute->setData('attribute_set_id', $attributeSetId);
        $attribute->setData('attribute_group_id', $attributeGroupId);
        $attribute->setData('used_in_forms', [
            'adminhtml_customer',
            'customer_account_create',
            'customer_account_edit'
        ]);
        $this->attributeResource->save($attribute);

        $eavSetup->addAttribute(Customer::ENTITY, $genderField, [
            // Attribute parameters
            'type' => 'varchar',
            'label' => $genderFieldLabel,
            'input' => 'text',
            'required' => true,
            'visible' => true,
            'user_defined' => true,
            'sort_order' => 991,
            'position' => 991,
            'system' => 0,
        ]);
        $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, $genderField);
        $attribute->setData('attribute_set_id', $attributeSetId);
        $attribute->setData('attribute_group_id', $attributeGroupId);
        $attribute->setData('used_in_forms', [
            'adminhtml_customer',
            'customer_account_create',
            'customer_account_edit'
        ]);
        $this->attributeResource->save($attribute);

        $eavSetup->addAttribute(Customer::ENTITY, $ageField, [
            // Attribute parameters
            'type' => 'varchar',
            'label' => $ageFieldLabel,
            'input' => 'text',
            'required' => true,
            'visible' => true,
            'user_defined' => true,
            'sort_order' => 992,
            'position' => 993,
            'system' => 0,
        ]);
        $attribute = $this->eavConfig->getAttribute(Customer::ENTITY, $ageField);
        $attribute->setData('attribute_set_id', $attributeSetId);
        $attribute->setData('attribute_group_id', $attributeGroupId);
        $attribute->setData('used_in_forms', [
            'adminhtml_customer',
            'customer_account_create',
            'customer_account_edit'
        ]);
        $this->attributeResource->save($attribute);
    }
}

   