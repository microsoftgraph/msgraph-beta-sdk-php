<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppManagementPolicy extends PolicyBase 
{
    /** @var array<DirectoryObject>|null $appliesTo  */
    private ?array $appliesTo = null;
    
    /** @var bool|null $isEnabled  */
    private ?bool $isEnabled = null;
    
    /** @var AppManagementConfiguration|null $restrictions  */
    private ?AppManagementConfiguration $restrictions = null;
    
    /**
     * Instantiates a new appManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppManagementPolicy
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AppManagementPolicy {
        return new AppManagementPolicy();
    }

    /**
     * Gets the appliesTo property value. 
     * @return array<DirectoryObject>|null
    */
    public function getAppliesTo(): ?array {
        return $this->appliesTo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appliesTo' => function (self $o, ParseNode $n) { $o->setAppliesTo($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'isEnabled' => function (self $o, ParseNode $n) { $o->setIsEnabled($n->getBooleanValue()); },
            'restrictions' => function (self $o, ParseNode $n) { $o->setRestrictions($n->getObjectValue(AppManagementConfiguration::class)); },
        ]);
    }

    /**
     * Gets the isEnabled property value. 
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the restrictions property value. 
     * @return AppManagementConfiguration|null
    */
    public function getRestrictions(): ?AppManagementConfiguration {
        return $this->restrictions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('appliesTo', $this->appliesTo);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeObjectValue('restrictions', $this->restrictions);
    }

    /**
     * Sets the appliesTo property value. 
     *  @param array<DirectoryObject>|null $value Value to set for the appliesTo property.
    */
    public function setAppliesTo(?array $value ): void {
        $this->appliesTo = $value;
    }

    /**
     * Sets the isEnabled property value. 
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the restrictions property value. 
     *  @param AppManagementConfiguration|null $value Value to set for the restrictions property.
    */
    public function setRestrictions(?AppManagementConfiguration $value ): void {
        $this->restrictions = $value;
    }

}
