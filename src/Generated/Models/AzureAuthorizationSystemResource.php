<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureAuthorizationSystemResource extends AuthorizationSystemResource implements Parsable 
{
    /**
     * Instantiates a new AzureAuthorizationSystemResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.azureAuthorizationSystemResource');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureAuthorizationSystemResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureAuthorizationSystemResource {
        return new AzureAuthorizationSystemResource();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'service' => fn(ParseNode $n) => $o->setService($n->getObjectValue([AuthorizationSystemTypeService::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the service property value. The service associated with the resource in an Azure authorization system. This object is auto-expanded.
     * @return AuthorizationSystemTypeService|null
    */
    public function getService(): ?AuthorizationSystemTypeService {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || $val instanceof AuthorizationSystemTypeService) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('service', $this->getService());
    }

    /**
     * Sets the service property value. The service associated with the resource in an Azure authorization system. This object is auto-expanded.
     * @param AuthorizationSystemTypeService|null $value Value to set for the service property.
    */
    public function setService(?AuthorizationSystemTypeService $value): void {
        $this->getBackingStore()->set('service', $value);
    }

}
