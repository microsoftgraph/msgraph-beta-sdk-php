<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InformationProtectionPolicySetting extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $defaultLabelId The defaultLabelId property
    */
    private ?string $defaultLabelId = null;
    
    /**
     * @var bool|null $isDowngradeJustificationRequired The isDowngradeJustificationRequired property
    */
    private ?bool $isDowngradeJustificationRequired = null;
    
    /**
     * @var bool|null $isMandatory The isMandatory property
    */
    private ?bool $isMandatory = null;
    
    /**
     * @var string|null $moreInfoUrl The moreInfoUrl property
    */
    private ?string $moreInfoUrl = null;
    
    /**
     * Instantiates a new InformationProtectionPolicySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
     * Gets the isDowngradeJustificationRequired property value. The isDowngradeJustificationRequired property
     * @return bool|null
    */
    public function getIsDowngradeJustificationRequired(): ?bool {
        return $this->isDowngradeJustificationRequired;
    }

    /**
     * Gets the isMandatory property value. The isMandatory property
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->isMandatory;
    }

    /**
     * Gets the moreInfoUrl property value. The moreInfoUrl property
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the defaultLabelId property value. The defaultLabelId property
     *  @param string|null $value Value to set for the defaultLabelId property.
    */
    public function setDefaultLabelId(?string $value ): void {
        $this->defaultLabelId = $value;
    }

    /**
     * Sets the isDowngradeJustificationRequired property value. The isDowngradeJustificationRequired property
     *  @param bool|null $value Value to set for the isDowngradeJustificationRequired property.
    */
    public function setIsDowngradeJustificationRequired(?bool $value ): void {
        $this->isDowngradeJustificationRequired = $value;
    }

    /**
     * Sets the isMandatory property value. The isMandatory property
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value ): void {
        $this->isMandatory = $value;
    }

    /**
     * Sets the moreInfoUrl property value. The moreInfoUrl property
     *  @param string|null $value Value to set for the moreInfoUrl property.
    */
    public function setMoreInfoUrl(?string $value ): void {
        $this->moreInfoUrl = $value;
    }

}
