<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExpeditedQualityUpdateReference extends QualityUpdateReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var EquivalentContentOption|null $equivalentContent Specifies other content to consider as equivalent. Supports a subset of the values for equivalentContentOption. Default value is latestSecurity. Possible values are: latestSecurity, unknownFutureValue.
    */
    private ?EquivalentContentOption $equivalentContent = null;
    
    /**
     * Instantiates a new ExpeditedQualityUpdateReference and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExpeditedQualityUpdateReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExpeditedQualityUpdateReference {
        return new ExpeditedQualityUpdateReference();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the equivalentContent property value. Specifies other content to consider as equivalent. Supports a subset of the values for equivalentContentOption. Default value is latestSecurity. Possible values are: latestSecurity, unknownFutureValue.
     * @return EquivalentContentOption|null
    */
    public function getEquivalentContent(): ?EquivalentContentOption {
        return $this->equivalentContent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'equivalentContent' => function (ParseNode $n) use ($o) { $o->setEquivalentContent($n->getEnumValue(EquivalentContentOption::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('equivalentContent', $this->equivalentContent);
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
     * Sets the equivalentContent property value. Specifies other content to consider as equivalent. Supports a subset of the values for equivalentContentOption. Default value is latestSecurity. Possible values are: latestSecurity, unknownFutureValue.
     *  @param EquivalentContentOption|null $value Value to set for the equivalentContent property.
    */
    public function setEquivalentContent(?EquivalentContentOption $value ): void {
        $this->equivalentContent = $value;
    }

}
