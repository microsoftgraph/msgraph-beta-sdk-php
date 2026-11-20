<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Bring-your-own service principal.
*/
class ServicePrincipalDeploymentIdentity extends DeploymentIdentity implements Parsable 
{
    /**
     * Instantiates a new ServicePrincipalDeploymentIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.contentManagement.servicePrincipalDeploymentIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipalDeploymentIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipalDeploymentIdentity {
        return new ServicePrincipalDeploymentIdentity();
    }

    /**
     * Gets the applicationId property value. Application (client) id of the customer-supplied service principal.
     * @return string|null
    */
    public function getApplicationId(): ?string {
        $val = $this->getBackingStore()->get('applicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationId' => fn(ParseNode $n) => $o->setApplicationId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('applicationId', $this->getApplicationId());
    }

    /**
     * Sets the applicationId property value. Application (client) id of the customer-supplied service principal.
     * @param string|null $value Value to set for the applicationId property.
    */
    public function setApplicationId(?string $value): void {
        $this->getBackingStore()->set('applicationId', $value);
    }

}
