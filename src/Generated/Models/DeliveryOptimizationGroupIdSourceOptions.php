<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeliveryOptimizationGroupIdSourceOptions extends DeliveryOptimizationGroupIdSource implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeliveryOptimizationGroupIdOptionsType|null $groupIdSourceOption Set this policy to restrict peer selection to a specific source. Possible values are: notConfigured, adSite, authenticatedDomainSid, dhcpUserOption, dnsSuffix.
    */
    private ?DeliveryOptimizationGroupIdOptionsType $groupIdSourceOption = null;
    
    /**
     * Instantiates a new DeliveryOptimizationGroupIdSourceOptions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeliveryOptimizationGroupIdSourceOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeliveryOptimizationGroupIdSourceOptions {
        return new DeliveryOptimizationGroupIdSourceOptions();
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
        return array_merge(parent::getFieldDeserializers(), [
            'groupIdSourceOption' => function (ParseNode $n) use ($o) { $o->setGroupIdSourceOption($n->getEnumValue(DeliveryOptimizationGroupIdOptionsType::class)); },
        ]);
    }

    /**
     * Gets the groupIdSourceOption property value. Set this policy to restrict peer selection to a specific source. Possible values are: notConfigured, adSite, authenticatedDomainSid, dhcpUserOption, dnsSuffix.
     * @return DeliveryOptimizationGroupIdOptionsType|null
    */
    public function getGroupIdSourceOption(): ?DeliveryOptimizationGroupIdOptionsType {
        return $this->groupIdSourceOption;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('groupIdSourceOption', $this->groupIdSourceOption);
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
     * Sets the groupIdSourceOption property value. Set this policy to restrict peer selection to a specific source. Possible values are: notConfigured, adSite, authenticatedDomainSid, dhcpUserOption, dnsSuffix.
     *  @param DeliveryOptimizationGroupIdOptionsType|null $value Value to set for the groupIdSourceOption property.
    */
    public function setGroupIdSourceOption(?DeliveryOptimizationGroupIdOptionsType $value ): void {
        $this->groupIdSourceOption = $value;
    }

}
