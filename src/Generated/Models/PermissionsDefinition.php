<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PermissionsDefinition implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new permissionsDefinition and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.awsPermissionsDefinition': return new AwsPermissionsDefinition();
                case '#microsoft.graph.singleResourceAzurePermissionsDefinition': return new SingleResourceAzurePermissionsDefinition();
                case '#microsoft.graph.singleResourceGcpPermissionsDefinition': return new SingleResourceGcpPermissionsDefinition();
            }
        }
        return new PermissionsDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the authorizationSystemInfo property value. The authorizationSystemInfo property
     * @return PermissionsDefinitionAuthorizationSystem|null
    */
    public function getAuthorizationSystemInfo(): ?PermissionsDefinitionAuthorizationSystem {
        $val = $this->getBackingStore()->get('authorizationSystemInfo');
        if (is_null($val) || $val instanceof PermissionsDefinitionAuthorizationSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizationSystemInfo'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizationSystemInfo' => fn(ParseNode $n) => $o->setAuthorizationSystemInfo($n->getObjectValue([PermissionsDefinitionAuthorizationSystem::class, 'createFromDiscriminatorValue'])),
            'identityInfo' => fn(ParseNode $n) => $o->setIdentityInfo($n->getObjectValue([PermissionsDefinitionAuthorizationSystemIdentity::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the identityInfo property value. The identityInfo property
     * @return PermissionsDefinitionAuthorizationSystemIdentity|null
    */
    public function getIdentityInfo(): ?PermissionsDefinitionAuthorizationSystemIdentity {
        $val = $this->getBackingStore()->get('identityInfo');
        if (is_null($val) || $val instanceof PermissionsDefinitionAuthorizationSystemIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityInfo'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('authorizationSystemInfo', $this->getAuthorizationSystemInfo());
        $writer->writeObjectValue('identityInfo', $this->getIdentityInfo());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authorizationSystemInfo property value. The authorizationSystemInfo property
     * @param PermissionsDefinitionAuthorizationSystem|null $value Value to set for the authorizationSystemInfo property.
    */
    public function setAuthorizationSystemInfo(?PermissionsDefinitionAuthorizationSystem $value): void {
        $this->getBackingStore()->set('authorizationSystemInfo', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the identityInfo property value. The identityInfo property
     * @param PermissionsDefinitionAuthorizationSystemIdentity|null $value Value to set for the identityInfo property.
    */
    public function setIdentityInfo(?PermissionsDefinitionAuthorizationSystemIdentity $value): void {
        $this->getBackingStore()->set('identityInfo', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
