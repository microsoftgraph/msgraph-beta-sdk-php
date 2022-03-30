<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityPolicySettings extends Entity 
{
    /** @var SensitivityLabelTarget|null $applicableTo  */
    private ?SensitivityLabelTarget $applicableTo = null;
    
    /** @var bool|null $downgradeSensitivityRequiresJustification  */
    private ?bool $downgradeSensitivityRequiresJustification = null;
    
    /** @var string|null $helpWebUrl  */
    private ?string $helpWebUrl = null;
    
    /** @var bool|null $isMandatory  */
    private ?bool $isMandatory = null;
    
    /**
     * Instantiates a new sensitivityPolicySettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityPolicySettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityPolicySettings {
        return new SensitivityPolicySettings();
    }

    /**
     * Gets the applicableTo property value. 
     * @return SensitivityLabelTarget|null
    */
    public function getApplicableTo(): ?SensitivityLabelTarget {
        return $this->applicableTo;
    }

    /**
     * Gets the downgradeSensitivityRequiresJustification property value. 
     * @return bool|null
    */
    public function getDowngradeSensitivityRequiresJustification(): ?bool {
        return $this->downgradeSensitivityRequiresJustification;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'applicableTo' => function (self $o, ParseNode $n) { $o->setApplicableTo($n->getEnumValue(SensitivityLabelTarget::class)); },
            'downgradeSensitivityRequiresJustification' => function (self $o, ParseNode $n) { $o->setDowngradeSensitivityRequiresJustification($n->getBooleanValue()); },
            'helpWebUrl' => function (self $o, ParseNode $n) { $o->setHelpWebUrl($n->getStringValue()); },
            'isMandatory' => function (self $o, ParseNode $n) { $o->setIsMandatory($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the helpWebUrl property value. 
     * @return string|null
    */
    public function getHelpWebUrl(): ?string {
        return $this->helpWebUrl;
    }

    /**
     * Gets the isMandatory property value. 
     * @return bool|null
    */
    public function getIsMandatory(): ?bool {
        return $this->isMandatory;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicableTo', $this->applicableTo);
        $writer->writeBooleanValue('downgradeSensitivityRequiresJustification', $this->downgradeSensitivityRequiresJustification);
        $writer->writeStringValue('helpWebUrl', $this->helpWebUrl);
        $writer->writeBooleanValue('isMandatory', $this->isMandatory);
    }

    /**
     * Sets the applicableTo property value. 
     *  @param SensitivityLabelTarget|null $value Value to set for the applicableTo property.
    */
    public function setApplicableTo(?SensitivityLabelTarget $value ): void {
        $this->applicableTo = $value;
    }

    /**
     * Sets the downgradeSensitivityRequiresJustification property value. 
     *  @param bool|null $value Value to set for the downgradeSensitivityRequiresJustification property.
    */
    public function setDowngradeSensitivityRequiresJustification(?bool $value ): void {
        $this->downgradeSensitivityRequiresJustification = $value;
    }

    /**
     * Sets the helpWebUrl property value. 
     *  @param string|null $value Value to set for the helpWebUrl property.
    */
    public function setHelpWebUrl(?string $value ): void {
        $this->helpWebUrl = $value;
    }

    /**
     * Sets the isMandatory property value. 
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value ): void {
        $this->isMandatory = $value;
    }

}
