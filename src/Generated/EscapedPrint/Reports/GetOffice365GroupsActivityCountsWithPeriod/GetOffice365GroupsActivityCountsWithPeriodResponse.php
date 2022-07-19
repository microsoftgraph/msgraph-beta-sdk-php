<?php

namespace Microsoft\Graph\Beta\Generated\EscapedPrint\Reports\GetOffice365GroupsActivityCountsWithPeriod;

use Microsoft\Graph\Beta\Generated\Models\Office365GroupsActivityCounts;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetOffice365GroupsActivityCountsWithPeriodResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<Office365GroupsActivityCounts>|null $value The value property
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new getOffice365GroupsActivityCountsWithPeriodResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetOffice365GroupsActivityCountsWithPeriodResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetOffice365GroupsActivityCountsWithPeriodResponse {
        return new GetOffice365GroupsActivityCountsWithPeriodResponse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getCollectionOfObjectValues(array(Office365GroupsActivityCounts::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the value property value. The value property
     * @return array<Office365GroupsActivityCounts>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('value', $this->value);
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
     * Sets the value property value. The value property
     *  @param array<Office365GroupsActivityCounts>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}
