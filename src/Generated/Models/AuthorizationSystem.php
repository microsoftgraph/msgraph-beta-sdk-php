<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthorizationSystem extends Entity implements Parsable 
{
    /**
     * Instantiates a new authorizationSystem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthorizationSystem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthorizationSystem {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.awsAuthorizationSystem': return new AwsAuthorizationSystem();
                case '#microsoft.graph.azureAuthorizationSystem': return new AzureAuthorizationSystem();
                case '#microsoft.graph.gcpAuthorizationSystem': return new GcpAuthorizationSystem();
            }
        }
        return new AuthorizationSystem();
    }

    /**
     * Gets the authorizationSystemId property value. The authorizationSystemId property
     * @return string|null
    */
    public function getAuthorizationSystemId(): ?string {
        $val = $this->getBackingStore()->get('authorizationSystemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystemId'");
    }

    /**
     * Gets the authorizationSystemName property value. The authorizationSystemName property
     * @return string|null
    */
    public function getAuthorizationSystemName(): ?string {
        $val = $this->getBackingStore()->get('authorizationSystemName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystemName'");
    }

    /**
     * Gets the authorizationSystemType property value. The authorizationSystemType property
     * @return string|null
    */
    public function getAuthorizationSystemType(): ?string {
        $val = $this->getBackingStore()->get('authorizationSystemType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystemType'");
    }

    /**
     * Gets the dataCollectionInfo property value. The dataCollectionInfo property
     * @return DataCollectionInfo|null
    */
    public function getDataCollectionInfo(): ?DataCollectionInfo {
        $val = $this->getBackingStore()->get('dataCollectionInfo');
        if (is_null($val) || $val instanceof DataCollectionInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataCollectionInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authorizationSystemId' => fn(ParseNode $n) => $o->setAuthorizationSystemId($n->getStringValue()),
            'authorizationSystemName' => fn(ParseNode $n) => $o->setAuthorizationSystemName($n->getStringValue()),
            'authorizationSystemType' => fn(ParseNode $n) => $o->setAuthorizationSystemType($n->getStringValue()),
            'dataCollectionInfo' => fn(ParseNode $n) => $o->setDataCollectionInfo($n->getObjectValue([DataCollectionInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authorizationSystemId', $this->getAuthorizationSystemId());
        $writer->writeStringValue('authorizationSystemName', $this->getAuthorizationSystemName());
        $writer->writeStringValue('authorizationSystemType', $this->getAuthorizationSystemType());
        $writer->writeObjectValue('dataCollectionInfo', $this->getDataCollectionInfo());
    }

    /**
     * Sets the authorizationSystemId property value. The authorizationSystemId property
     * @param string|null $value Value to set for the authorizationSystemId property.
    */
    public function setAuthorizationSystemId(?string $value): void {
        $this->getBackingStore()->set('authorizationSystemId', $value);
    }

    /**
     * Sets the authorizationSystemName property value. The authorizationSystemName property
     * @param string|null $value Value to set for the authorizationSystemName property.
    */
    public function setAuthorizationSystemName(?string $value): void {
        $this->getBackingStore()->set('authorizationSystemName', $value);
    }

    /**
     * Sets the authorizationSystemType property value. The authorizationSystemType property
     * @param string|null $value Value to set for the authorizationSystemType property.
    */
    public function setAuthorizationSystemType(?string $value): void {
        $this->getBackingStore()->set('authorizationSystemType', $value);
    }

    /**
     * Sets the dataCollectionInfo property value. The dataCollectionInfo property
     * @param DataCollectionInfo|null $value Value to set for the dataCollectionInfo property.
    */
    public function setDataCollectionInfo(?DataCollectionInfo $value): void {
        $this->getBackingStore()->set('dataCollectionInfo', $value);
    }

}
