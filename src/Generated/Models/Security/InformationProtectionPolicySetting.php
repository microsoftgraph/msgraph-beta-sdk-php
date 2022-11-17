<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionPolicySetting extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('defaultLabelId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLabelId' => fn(ParseNode $n) => $o->setDefaultLabelId($n->getStringValue()),
            'isDowngradeJustificationRequired' => fn(ParseNode $n) => $o->setIsDowngradeJustificationRequired($n->getBooleanValue()),
            'isMandatory' => fn(ParseNode $n) => $o->setIsMandatory($n->getBooleanValue()),
            'moreInfoUrl' => fn(ParseNode $n) => $o->setMoreInfoUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDowngradeJustificationRequired property value. Exposes whether justification input is required on label downgrade.
     * @return bool|null
    */
    public function getIsDowngradeJustificationRequired(): ?bool {
        return $this->getBackingStore()->get('isDowngradeJustificationRequired');
    }

    /**
     * Gets the isMandatory property value. Exposes whether mandatory labeling is enabled.
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->getBackingStore()->get('isMandatory');
    }

    /**
     * Gets the moreInfoUrl property value. Exposes the more information URL that can be configured by the administrator.
     * @return string|null
    */
    public function getMoreInfoUrl(): ?string {
        return $this->getBackingStore()->get('moreInfoUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('defaultLabelId', $this->getDefaultLabelId());
        $writer->writeBooleanValue('isDowngradeJustificationRequired', $this->getIsDowngradeJustificationRequired());
        $writer->writeBooleanValue('isMandatory', $this->getIsMandatory());
        $writer->writeStringValue('moreInfoUrl', $this->getMoreInfoUrl());
    }

    /**
     * Sets the defaultLabelId property value. The defaultLabelId property
     *  @param string|null $value Value to set for the defaultLabelId property.
    */
    public function setDefaultLabelId(?string $value): void {
        $this->getBackingStore()->set('defaultLabelId', $value);
    }

    /**
     * Sets the isDowngradeJustificationRequired property value. Exposes whether justification input is required on label downgrade.
     *  @param bool|null $value Value to set for the isDowngradeJustificationRequired property.
    */
    public function setIsDowngradeJustificationRequired(?bool $value): void {
        $this->getBackingStore()->set('isDowngradeJustificationRequired', $value);
    }

    /**
     * Sets the isMandatory property value. Exposes whether mandatory labeling is enabled.
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value): void {
        $this->getBackingStore()->set('isMandatory', $value);
    }

    /**
     * Sets the moreInfoUrl property value. Exposes the more information URL that can be configured by the administrator.
     *  @param string|null $value Value to set for the moreInfoUrl property.
    */
    public function setMoreInfoUrl(?string $value): void {
        $this->getBackingStore()->set('moreInfoUrl', $value);
    }

}
