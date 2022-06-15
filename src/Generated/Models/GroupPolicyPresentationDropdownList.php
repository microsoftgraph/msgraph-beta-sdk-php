<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupPolicyPresentationDropdownList extends GroupPolicyPresentation implements Parsable 
{
    /**
     * @var GroupPolicyPresentationDropdownListItem|null $defaultItem Localized string value identifying the default choice of the list of items.
    */
    private ?GroupPolicyPresentationDropdownListItem $defaultItem = null;
    
    /**
     * @var array<GroupPolicyPresentationDropdownListItem>|null $items Represents a set of localized display names and their associated values.
    */
    private ?array $items = null;
    
    /**
     * @var bool|null $required Requirement to enter a value in the parameter box. The default value is false.
    */
    private ?bool $required = null;
    
    /**
     * Instantiates a new GroupPolicyPresentationDropdownList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationDropdownList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationDropdownList {
        return new GroupPolicyPresentationDropdownList();
    }

    /**
     * Gets the defaultItem property value. Localized string value identifying the default choice of the list of items.
     * @return GroupPolicyPresentationDropdownListItem|null
    */
    public function getDefaultItem(): ?GroupPolicyPresentationDropdownListItem {
        return $this->defaultItem;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultItem' => function (ParseNode $n) use ($o) { $o->setDefaultItem($n->getObjectValue(array(GroupPolicyPresentationDropdownListItem::class, 'createFromDiscriminatorValue'))); },
            'items' => function (ParseNode $n) use ($o) { $o->setItems($n->getCollectionOfObjectValues(array(GroupPolicyPresentationDropdownListItem::class, 'createFromDiscriminatorValue'))); },
            'required' => function (ParseNode $n) use ($o) { $o->setRequired($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the items property value. Represents a set of localized display names and their associated values.
     * @return array<GroupPolicyPresentationDropdownListItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the required property value. Requirement to enter a value in the parameter box. The default value is false.
     * @return bool|null
    */
    public function getRequired(): ?bool {
        return $this->required;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('defaultItem', $this->defaultItem);
        $writer->writeCollectionOfObjectValues('items', $this->items);
        $writer->writeBooleanValue('required', $this->required);
    }

    /**
     * Sets the defaultItem property value. Localized string value identifying the default choice of the list of items.
     *  @param GroupPolicyPresentationDropdownListItem|null $value Value to set for the defaultItem property.
    */
    public function setDefaultItem(?GroupPolicyPresentationDropdownListItem $value ): void {
        $this->defaultItem = $value;
    }

    /**
     * Sets the items property value. Represents a set of localized display names and their associated values.
     *  @param array<GroupPolicyPresentationDropdownListItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value ): void {
        $this->items = $value;
    }

    /**
     * Sets the required property value. Requirement to enter a value in the parameter box. The default value is false.
     *  @param bool|null $value Value to set for the required property.
    */
    public function setRequired(?bool $value ): void {
        $this->required = $value;
    }

}
