<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensitivityPolicySettings extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var SensitivityLabelTarget|null $applicableTo The applicableTo property
    */
    private ?SensitivityLabelTarget $applicableTo = null;
    
    /**
     * @var bool|null $downgradeSensitivityRequiresJustification The downgradeSensitivityRequiresJustification property
    */
    private ?bool $downgradeSensitivityRequiresJustification = null;
    
    /**
     * @var string|null $helpWebUrl The helpWebUrl property
    */
    private ?string $helpWebUrl = null;
    
    /**
     * @var bool|null $isMandatory The isMandatory property
    */
    private ?bool $isMandatory = null;
    
    /**
     * Instantiates a new sensitivityPolicySettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensitivityPolicySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensitivityPolicySettings {
        return new SensitivityPolicySettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableTo property value. The applicableTo property
     * @return SensitivityLabelTarget|null
    */
    public function getApplicableTo(): ?SensitivityLabelTarget {
        return $this->applicableTo;
    }

    /**
     * Gets the downgradeSensitivityRequiresJustification property value. The downgradeSensitivityRequiresJustification property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableTo' => function (ParseNode $n) use ($o) { $o->setApplicableTo($n->getEnumValue(SensitivityLabelTarget::class)); },
            'downgradeSensitivityRequiresJustification' => function (ParseNode $n) use ($o) { $o->setDowngradeSensitivityRequiresJustification($n->getBooleanValue()); },
            'helpWebUrl' => function (ParseNode $n) use ($o) { $o->setHelpWebUrl($n->getStringValue()); },
            'isMandatory' => function (ParseNode $n) use ($o) { $o->setIsMandatory($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the helpWebUrl property value. The helpWebUrl property
     * @return string|null
    */
    public function getHelpWebUrl(): ?string {
        return $this->helpWebUrl;
    }

    /**
     * Gets the isMandatory property value. The isMandatory property
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
     * Sets the applicableTo property value. The applicableTo property
     *  @param SensitivityLabelTarget|null $value Value to set for the applicableTo property.
    */
    public function setApplicableTo(?SensitivityLabelTarget $value ): void {
        $this->applicableTo = $value;
    }

    /**
     * Sets the downgradeSensitivityRequiresJustification property value. The downgradeSensitivityRequiresJustification property
     *  @param bool|null $value Value to set for the downgradeSensitivityRequiresJustification property.
    */
    public function setDowngradeSensitivityRequiresJustification(?bool $value ): void {
        $this->downgradeSensitivityRequiresJustification = $value;
    }

    /**
     * Sets the helpWebUrl property value. The helpWebUrl property
     *  @param string|null $value Value to set for the helpWebUrl property.
    */
    public function setHelpWebUrl(?string $value ): void {
        $this->helpWebUrl = $value;
    }

    /**
     * Sets the isMandatory property value. The isMandatory property
     *  @param bool|null $value Value to set for the isMandatory property.
    */
    public function setIsMandatory(?bool $value ): void {
        $this->isMandatory = $value;
    }

}
