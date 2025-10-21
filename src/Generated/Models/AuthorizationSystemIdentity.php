<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthorizationSystemIdentity extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthorizationSystemIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationSystemIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationSystemIdentity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.awsAccessKey': return new AwsAccessKey();
                case '#microsoft.graph.awsEc2Instance': return new AwsEc2Instance();
                case '#microsoft.graph.awsGroup': return new AwsGroup();
                case '#microsoft.graph.awsIdentity': return new AwsIdentity();
                case '#microsoft.graph.awsLambda': return new AwsLambda();
                case '#microsoft.graph.awsRole': return new AwsRole();
                case '#microsoft.graph.awsUser': return new AwsUser();
                case '#microsoft.graph.azureGroup': return new AzureGroup();
                case '#microsoft.graph.azureIdentity': return new AzureIdentity();
                case '#microsoft.graph.azureManagedIdentity': return new AzureManagedIdentity();
                case '#microsoft.graph.azureServerlessFunction': return new AzureServerlessFunction();
                case '#microsoft.graph.azureServicePrincipal': return new AzureServicePrincipal();
                case '#microsoft.graph.azureUser': return new AzureUser();
                case '#microsoft.graph.gcpCloudFunction': return new GcpCloudFunction();
                case '#microsoft.graph.gcpGroup': return new GcpGroup();
                case '#microsoft.graph.gcpIdentity': return new GcpIdentity();
                case '#microsoft.graph.gcpServiceAccount': return new GcpServiceAccount();
                case '#microsoft.graph.gcpUser': return new GcpUser();
            }
        }
        return new AuthorizationSystemIdentity();
    }

    /**
     * Gets the authorizationSystem property value. Navigation to the authorizationSystem object
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
     * Gets the displayName property value. The name of the identity. Read-only. Supports $filter and (eq,contains).
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
     * Gets the externalId property value. Unique ID of the identity within the external system. Read-only.
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
            'source' => fn(ParseNode $n) => $o->setSource($n->getObjectValue([AuthorizationSystemIdentitySource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the source property value. Represents details of the source of the identity.
     * @return AuthorizationSystemIdentitySource|null
    */
    public function getSource(): ?AuthorizationSystemIdentitySource {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || $val instanceof AuthorizationSystemIdentitySource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
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
        $writer->writeObjectValue('source', $this->getSource());
    }

    /**
     * Sets the authorizationSystem property value. Navigation to the authorizationSystem object
     * @param AuthorizationSystem|null $value Value to set for the authorizationSystem property.
    */
    public function setAuthorizationSystem(?AuthorizationSystem $value): void {
        $this->getBackingStore()->set('authorizationSystem', $value);
    }

    /**
     * Sets the displayName property value. The name of the identity. Read-only. Supports $filter and (eq,contains).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalId property value. Unique ID of the identity within the external system. Read-only.
     * @param string|null $value Value to set for the externalId property.
    */
    public function setExternalId(?string $value): void {
        $this->getBackingStore()->set('externalId', $value);
    }

    /**
     * Sets the source property value. Represents details of the source of the identity.
     * @param AuthorizationSystemIdentitySource|null $value Value to set for the source property.
    */
    public function setSource(?AuthorizationSystemIdentitySource $value): void {
        $this->getBackingStore()->set('source', $value);
    }

}
