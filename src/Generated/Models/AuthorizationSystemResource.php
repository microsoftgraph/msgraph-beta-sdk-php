<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthorizationSystemResource extends Entity implements Parsable 
{
    /**
     * Instantiates a new authorizationSystemResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationSystemResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationSystemResource {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.awsAuthorizationSystemResource': return new AwsAuthorizationSystemResource();
                case '#microsoft.graph.azureAuthorizationSystemResource': return new AzureAuthorizationSystemResource();
                case '#microsoft.graph.gcpAuthorizationSystemResource': return new GcpAuthorizationSystemResource();
            }
        }
        return new AuthorizationSystemResource();
    }

    /**
     * Gets the authorizationSystem property value. The authorizationSystem property
     * @return AuthorizationSystem|null
    */
    public function getAuthorizationSystem(): ?AuthorizationSystem {
        $val = $this->getBackingStore()->get('authorizationSystem');
        if (is_null($val) || $val instanceof AuthorizationSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystem'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalId property value. The externalId property
     * @return string|null
    */
    public function getExternalId(): ?string {
        $val = $this->getBackingStore()->get('externalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authorizationSystem' => fn(ParseNode $n) => $o->setAuthorizationSystem($n->getObjectValue([AuthorizationSystem::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalId' => fn(ParseNode $n) => $o->setExternalId($n->getStringValue()),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authorizationSystem', $this->getAuthorizationSystem());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalId', $this->getExternalId());
        $writer->writeStringValue('resourceType', $this->getResourceType());
    }

    /**
     * Sets the authorizationSystem property value. The authorizationSystem property
     * @param AuthorizationSystem|null $value Value to set for the authorizationSystem property.
    */
    public function setAuthorizationSystem(?AuthorizationSystem $value): void {
        $this->getBackingStore()->set('authorizationSystem', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. The externalId property
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

}
