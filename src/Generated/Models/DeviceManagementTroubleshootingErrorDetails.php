<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Object containing detailed information about the error and its remediation.
*/
class DeviceManagementTroubleshootingErrorDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DeviceManagementTroubleshootingErrorDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTroubleshootingErrorDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTroubleshootingErrorDetails {
        return new DeviceManagementTroubleshootingErrorDetails();
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
     * Gets the context property value. The context property
     * @return string|null
    */
    public function getContext(): ?string {
        $val = $this->getBackingStore()->get('context');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'context'");
    }

    /**
     * Gets the failure property value. The failure property
     * @return string|null
    */
    public function getFailure(): ?string {
        $val = $this->getBackingStore()->get('failure');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failure'");
    }

    /**
     * Gets the failureDetails property value. The detailed description of what went wrong.
     * @return string|null
    */
    public function getFailureDetails(): ?string {
        $val = $this->getBackingStore()->get('failureDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'context' => fn(ParseNode $n) => $o->setContext($n->getStringValue()),
            'failure' => fn(ParseNode $n) => $o->setFailure($n->getStringValue()),
            'failureDetails' => fn(ParseNode $n) => $o->setFailureDetails($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'remediation' => fn(ParseNode $n) => $o->setRemediation($n->getStringValue()),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([DeviceManagementTroubleshootingErrorResource::class, 'createFromDiscriminatorValue'])),
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
     * Gets the remediation property value. The detailed description of how to remediate this issue.
     * @return string|null
    */
    public function getRemediation(): ?string {
        $val = $this->getBackingStore()->get('remediation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediation'");
    }

    /**
     * Gets the resources property value. Links to helpful documentation about this failure.
     * @return array<DeviceManagementTroubleshootingErrorResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementTroubleshootingErrorResource::class);
            /** @var array<DeviceManagementTroubleshootingErrorResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('context', $this->getContext());
        $writer->writeStringValue('failure', $this->getFailure());
        $writer->writeStringValue('failureDetails', $this->getFailureDetails());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('remediation', $this->getRemediation());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
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
     * Sets the context property value. The context property
     * @param string|null $value Value to set for the context property.
    */
    public function setContext(?string $value): void {
        $this->getBackingStore()->set('context', $value);
    }

    /**
     * Sets the failure property value. The failure property
     * @param string|null $value Value to set for the failure property.
    */
    public function setFailure(?string $value): void {
        $this->getBackingStore()->set('failure', $value);
    }

    /**
     * Sets the failureDetails property value. The detailed description of what went wrong.
     * @param string|null $value Value to set for the failureDetails property.
    */
    public function setFailureDetails(?string $value): void {
        $this->getBackingStore()->set('failureDetails', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the remediation property value. The detailed description of how to remediate this issue.
     * @param string|null $value Value to set for the remediation property.
    */
    public function setRemediation(?string $value): void {
        $this->getBackingStore()->set('remediation', $value);
    }

    /**
     * Sets the resources property value. Links to helpful documentation about this failure.
     * @param array<DeviceManagementTroubleshootingErrorResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

}
