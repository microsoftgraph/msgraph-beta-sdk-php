<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServiceLevelAgreementRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new ServiceLevelAgreementRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServiceLevelAgreementRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServiceLevelAgreementRoot {
        return new ServiceLevelAgreementRoot();
    }

    /**
     * Gets the azureADAuthentication property value. Collects the monthly Microsoft Entra Health SLA attainment metrics for a Microsoft Entra tenant.
     * @return AzureADAuthentication|null
    */
    public function getAzureADAuthentication(): ?AzureADAuthentication {
        $val = $this->getBackingStore()->get('azureADAuthentication');
        if (is_null($val) || $val instanceof AzureADAuthentication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADAuthentication'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureADAuthentication' => fn(ParseNode $n) => $o->setAzureADAuthentication($n->getObjectValue([AzureADAuthentication::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('azureADAuthentication', $this->getAzureADAuthentication());
    }

    /**
     * Sets the azureADAuthentication property value. Collects the monthly Microsoft Entra Health SLA attainment metrics for a Microsoft Entra tenant.
     * @param AzureADAuthentication|null $value Value to set for the azureADAuthentication property.
    */
    public function setAzureADAuthentication(?AzureADAuthentication $value): void {
        $this->getBackingStore()->set('azureADAuthentication', $value);
    }

}
