<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ResponseAction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ResponseAction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResponseAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.allowFileResponseAction': return new AllowFileResponseAction();
                case '#microsoft.graph.security.blockFileResponseAction': return new BlockFileResponseAction();
                case '#microsoft.graph.security.collectInvestigationPackageIncidentTaskResponseAction': return new CollectInvestigationPackageIncidentTaskResponseAction();
                case '#microsoft.graph.security.collectInvestigationPackageResponseAction': return new CollectInvestigationPackageResponseAction();
                case '#microsoft.graph.security.disableUserIncidentTaskResponseAction': return new DisableUserIncidentTaskResponseAction();
                case '#microsoft.graph.security.disableUserResponseAction': return new DisableUserResponseAction();
                case '#microsoft.graph.security.enableUserIncidentTaskResponseAction': return new EnableUserIncidentTaskResponseAction();
                case '#microsoft.graph.security.forceUserPasswordResetIncidentTaskResponseAction': return new ForceUserPasswordResetIncidentTaskResponseAction();
                case '#microsoft.graph.security.forceUserPasswordResetResponseAction': return new ForceUserPasswordResetResponseAction();
                case '#microsoft.graph.security.hardDeleteEmailIncidentTaskResponseAction': return new HardDeleteEmailIncidentTaskResponseAction();
                case '#microsoft.graph.security.hardDeleteResponseAction': return new HardDeleteResponseAction();
                case '#microsoft.graph.security.incidentTaskResponseAction': return new IncidentTaskResponseAction();
                case '#microsoft.graph.security.initiateInvestigationResponseAction': return new InitiateInvestigationResponseAction();
                case '#microsoft.graph.security.isolateDeviceIncidentTaskResponseAction': return new IsolateDeviceIncidentTaskResponseAction();
                case '#microsoft.graph.security.isolateDeviceResponseAction': return new IsolateDeviceResponseAction();
                case '#microsoft.graph.security.markUserAsCompromisedIncidentTaskResponseAction': return new MarkUserAsCompromisedIncidentTaskResponseAction();
                case '#microsoft.graph.security.markUserAsCompromisedResponseAction': return new MarkUserAsCompromisedResponseAction();
                case '#microsoft.graph.security.moveToDeletedItemsResponseAction': return new MoveToDeletedItemsResponseAction();
                case '#microsoft.graph.security.moveToInboxResponseAction': return new MoveToInboxResponseAction();
                case '#microsoft.graph.security.moveToJunkResponseAction': return new MoveToJunkResponseAction();
                case '#microsoft.graph.security.requireSignInIncidentTaskResponseAction': return new RequireSignInIncidentTaskResponseAction();
                case '#microsoft.graph.security.restrictAppExecutionIncidentTaskResponseAction': return new RestrictAppExecutionIncidentTaskResponseAction();
                case '#microsoft.graph.security.restrictAppExecutionResponseAction': return new RestrictAppExecutionResponseAction();
                case '#microsoft.graph.security.runAntivirusScanIncidentTaskResponseAction': return new RunAntivirusScanIncidentTaskResponseAction();
                case '#microsoft.graph.security.runAntivirusScanResponseAction': return new RunAntivirusScanResponseAction();
                case '#microsoft.graph.security.softDeleteIncidentTaskResponseAction': return new SoftDeleteIncidentTaskResponseAction();
                case '#microsoft.graph.security.softDeleteResponseAction': return new SoftDeleteResponseAction();
                case '#microsoft.graph.security.stopAndQuarantineFileIncidentTaskResponseAction': return new StopAndQuarantineFileIncidentTaskResponseAction();
                case '#microsoft.graph.security.stopAndQuarantineFileResponseAction': return new StopAndQuarantineFileResponseAction();
                case '#microsoft.graph.security.unIsolateDeviceIncidentTaskResponseAction': return new UnIsolateDeviceIncidentTaskResponseAction();
                case '#microsoft.graph.security.unRestrictAppExecutionIncidentTaskResponseAction': return new UnRestrictAppExecutionIncidentTaskResponseAction();
            }
        }
        return new ResponseAction();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
