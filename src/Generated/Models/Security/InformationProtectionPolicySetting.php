<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionPolicySetting extends Entity implements Parsable 
{
    /**
     * @var string|null $defaultLabelId The defaultLabelId property
    */
    private ?string $defaultLabelId = null;
    
    /**
     * @var bool|null $isDowngradeJustificationRequired Exposes whether justification input is required on label downgrade.
    */
    private ?bool $isDowngradeJustificationRequired = null;
    
    /**
     * @var bool|null $isMandatory Exposes whether mandatory labeling is enabled.
    */
    private ?bool $isMandatory = null;
    
    /**
     * @var string|null $moreInfoUrl Exposes the more information URL that can be configured by the administrator.
    */
    private ?string $moreInfoUrl = null;
    
    /**
     * Instantiates a new informationProtectionPolicySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.informationProtectionPolicySetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InformationProtectionPolicySetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InformationProtectionPolicySetting {
        return new InformationProtectionPolicySetting();
    }

    /**
     * Gets the defaultLabelId property value. The defaultLabelId property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLabelId' => function (ParseNode $n) use ($o) { $o->setDefaultLabelId($n->getStringValue()); },
            'isDowngradeJustificationRequired' => function (ParseNode $n) use ($o) { $o->setIsDowngradeJustificationRequired($n->getBooleanValue()); },
            'isMandatory' => function (ParseNode $n) use ($o) { $o->setIsMandatory($n->getBooleanValue()); },
            'moreInfoUrl' => function (ParseNode $n) use ($o) { $o->setMoreInfoUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDowngradeJustificationRequired property value. Exposes whether justification input is required on label downgrade.
     * @return bool|null
    */
    public function getIsDowngradeJustificationRequired(): ?bool {
        return $this->isDowngradeJustificationRequired;
    }

    /**
     * Gets the isMandatory property value. Exposes whether mandatory labeling is enabled.
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->isMandatory;
    }

    /**
     * Gets the moreInfoUrl property value. Exposes the more information URL that can be configured by the administrator.
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
     * Sets the defaultLabelId property value. The defaultLabelId property
     *  @param string|null $value Value to set for the defaultLabelId property.
    */
    public function setDefaultLabelId(?string $value ): void {
        $this->defaultLabelId = $value;
    }

    /**
     * Sets the isDowngradeJustificationRequired property value. Exposes whether justification input is required on label downgrade.
     *  @param bool|null $value Value to set for the isDowngradeJustificationRequired property.
    */
    public function setIsDowngradeJustificationRequired(?bool $value ): void {
        $this->isDowngradeJustificationRequired = $value;
    }

    /**
     * Sets the isMandatory property value. Exposes whether mandatory labeling is enabled.
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value ): void {
        $this->isMandatory = $value;
    }

    /**
     * Sets the moreInfoUrl property value. Exposes the more information URL that can be configured by the administrator.
     *  @param string|null $value Value to set for the moreInfoUrl property.
    */
    public function setMoreInfoUrl(?string $value ): void {
        $this->moreInfoUrl = $value;
    }

}
