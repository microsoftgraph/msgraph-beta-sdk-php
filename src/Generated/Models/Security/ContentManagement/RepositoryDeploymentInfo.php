<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Status fetch result and the most recent deployment, when available.
*/
class RepositoryDeploymentInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RepositoryDeploymentInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RepositoryDeploymentInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RepositoryDeploymentInfo {
        return new RepositoryDeploymentInfo();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deploymentFetchStatus property value. Whether deployment status could be fetched.
     * @return RepositoryDeploymentFetchStatus|null
    */
    public function getDeploymentFetchStatus(): ?RepositoryDeploymentFetchStatus {
        $val = $this->getBackingStore()->get('deploymentFetchStatus');
        if (is_null($val) || $val instanceof RepositoryDeploymentFetchStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentFetchStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deploymentFetchStatus' => fn(ParseNode $n) => $o->setDeploymentFetchStatus($n->getEnumValue(RepositoryDeploymentFetchStatus::class)),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'run' => fn(ParseNode $n) => $o->setRun($n->getObjectValue([RepositoryDeployment::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the message property value. Human-readable status or error message.
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
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
     * Gets the run property value. Deployment details; null when no run was fetched.
     * @return RepositoryDeployment|null
    */
    public function getRun(): ?RepositoryDeployment {
        $val = $this->getBackingStore()->get('run');
        if (is_null($val) || $val instanceof RepositoryDeployment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'run'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('deploymentFetchStatus', $this->getDeploymentFetchStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deploymentFetchStatus property value. Whether deployment status could be fetched.
     * @param RepositoryDeploymentFetchStatus|null $value Value to set for the deploymentFetchStatus property.
    */
    public function setDeploymentFetchStatus(?RepositoryDeploymentFetchStatus $value): void {
        $this->getBackingStore()->set('deploymentFetchStatus', $value);
    }

    /**
     * Sets the message property value. Human-readable status or error message.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the run property value. Deployment details; null when no run was fetched.
     * @param RepositoryDeployment|null $value Value to set for the run property.
    */
    public function setRun(?RepositoryDeployment $value): void {
        $this->getBackingStore()->set('run', $value);
    }

}
