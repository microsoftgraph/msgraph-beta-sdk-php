<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\ContentManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Details of a fetched deployment run. Read-only.
*/
class RepositoryDeployment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RepositoryDeployment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RepositoryDeployment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RepositoryDeployment {
        return new RepositoryDeployment();
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
     * Gets the deploymentDateTime property value. When the deployment ran.
     * @return DateTime|null
    */
    public function getDeploymentDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deploymentDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentDateTime'");
    }

    /**
     * Gets the deploymentId property value. Deployment id.
     * @return string|null
    */
    public function getDeploymentId(): ?string {
        $val = $this->getBackingStore()->get('deploymentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentId'");
    }

    /**
     * Gets the deploymentLogsUrl property value. URL where the deployment logs can be viewed.
     * @return string|null
    */
    public function getDeploymentLogsUrl(): ?string {
        $val = $this->getBackingStore()->get('deploymentLogsUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentLogsUrl'");
    }

    /**
     * Gets the deploymentResult property value. Result of a completed deployment.
     * @return RepositoryDeploymentResult|null
    */
    public function getDeploymentResult(): ?RepositoryDeploymentResult {
        $val = $this->getBackingStore()->get('deploymentResult');
        if (is_null($val) || $val instanceof RepositoryDeploymentResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentResult'");
    }

    /**
     * Gets the deploymentState property value. State of a deployment run.
     * @return RepositoryDeploymentState|null
    */
    public function getDeploymentState(): ?RepositoryDeploymentState {
        $val = $this->getBackingStore()->get('deploymentState');
        if (is_null($val) || $val instanceof RepositoryDeploymentState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deploymentDateTime' => fn(ParseNode $n) => $o->setDeploymentDateTime($n->getDateTimeValue()),
            'deploymentId' => fn(ParseNode $n) => $o->setDeploymentId($n->getStringValue()),
            'deploymentLogsUrl' => fn(ParseNode $n) => $o->setDeploymentLogsUrl($n->getStringValue()),
            'deploymentResult' => fn(ParseNode $n) => $o->setDeploymentResult($n->getEnumValue(RepositoryDeploymentResult::class)),
            'deploymentState' => fn(ParseNode $n) => $o->setDeploymentState($n->getEnumValue(RepositoryDeploymentState::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
        $writer->writeEnumValue('deploymentResult', $this->getDeploymentResult());
        $writer->writeEnumValue('deploymentState', $this->getDeploymentState());
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
     * Sets the deploymentDateTime property value. When the deployment ran.
     * @param DateTime|null $value Value to set for the deploymentDateTime property.
    */
    public function setDeploymentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deploymentDateTime', $value);
    }

    /**
     * Sets the deploymentId property value. Deployment id.
     * @param string|null $value Value to set for the deploymentId property.
    */
    public function setDeploymentId(?string $value): void {
        $this->getBackingStore()->set('deploymentId', $value);
    }

    /**
     * Sets the deploymentLogsUrl property value. URL where the deployment logs can be viewed.
     * @param string|null $value Value to set for the deploymentLogsUrl property.
    */
    public function setDeploymentLogsUrl(?string $value): void {
        $this->getBackingStore()->set('deploymentLogsUrl', $value);
    }

    /**
     * Sets the deploymentResult property value. Result of a completed deployment.
     * @param RepositoryDeploymentResult|null $value Value to set for the deploymentResult property.
    */
    public function setDeploymentResult(?RepositoryDeploymentResult $value): void {
        $this->getBackingStore()->set('deploymentResult', $value);
    }

    /**
     * Sets the deploymentState property value. State of a deployment run.
     * @param RepositoryDeploymentState|null $value Value to set for the deploymentState property.
    */
    public function setDeploymentState(?RepositoryDeploymentState $value): void {
        $this->getBackingStore()->set('deploymentState', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
