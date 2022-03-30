<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Security;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionPolicySetting extends Entity 
{
    /** @var string|null $defaultLabelId  */
    private ?string $defaultLabelId = null;
    
    /** @var bool|null $isDowngradeJustificationRequired  */
    private ?bool $isDowngradeJustificationRequired = null;
    
    /** @var bool|null $isMandatory  */
    private ?bool $isMandatory = null;
    
    /** @var string|null $moreInfoUrl  */
    private ?string $moreInfoUrl = null;
    
    /**
     * Instantiates a new informationProtectionPolicySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtectionPolicySetting
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtectionPolicySetting {
        return new InformationProtectionPolicySetting();
    }

    /**
     * Gets the defaultLabelId property value. 
     * @return string|null
    */
    public function getDefaultLabelId(): ?string {
        return $this->defaultLabelId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLabelId' => function (self $o, ParseNode $n) { $o->setDefaultLabelId($n->getStringValue()); },
            'isDowngradeJustificationRequired' => function (self $o, ParseNode $n) { $o->setIsDowngradeJustificationRequired($n->getBooleanValue()); },
            'isMandatory' => function (self $o, ParseNode $n) { $o->setIsMandatory($n->getBooleanValue()); },
            'moreInfoUrl' => function (self $o, ParseNode $n) { $o->setMoreInfoUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDowngradeJustificationRequired property value. 
     * @return bool|null
    */
    public function getIsDowngradeJustificationRequired(): ?bool {
        return $this->isDowngradeJustificationRequired;
    }

    /**
     * Gets the isMandatory property value. 
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->isMandatory;
    }

    /**
     * Gets the moreInfoUrl property value. 
     * @return string|null
    */
    public function getMoreInfoUrl(): ?string {
        return $this->moreInfoUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultLabelId', $this->defaultLabelId);
        $writer->writeBooleanValue('isDowngradeJustificationRequired', $this->isDowngradeJustificationRequired);
        $writer->writeBooleanValue('isMandatory', $this->isMandatory);
        $writer->writeStringValue('moreInfoUrl', $this->moreInfoUrl);
    }

    /**
     * Sets the defaultLabelId property value. 
     *  @param string|null $value Value to set for the defaultLabelId property.
    */
    public function setDefaultLabelId(?string $value ): void {
        $this->defaultLabelId = $value;
    }

    /**
     * Sets the isDowngradeJustificationRequired property value. 
     *  @param bool|null $value Value to set for the isDowngradeJustificationRequired property.
    */
    public function setIsDowngradeJustificationRequired(?bool $value ): void {
        $this->isDowngradeJustificationRequired = $value;
    }

    /**
     * Sets the isMandatory property value. 
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value ): void {
        $this->isMandatory = $value;
    }

    /**
     * Sets the moreInfoUrl property value. 
     *  @param string|null $value Value to set for the moreInfoUrl property.
    */
    public function setMoreInfoUrl(?string $value ): void {
        $this->moreInfoUrl = $value;
    }

}
