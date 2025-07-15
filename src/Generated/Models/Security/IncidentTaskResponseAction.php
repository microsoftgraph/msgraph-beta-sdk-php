<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IncidentTaskResponseAction extends ResponseAction implements Parsable 
{
    /**
     * Instantiates a new IncidentTaskResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.incidentTaskResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IncidentTaskResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IncidentTaskResponseAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.collectInvestigationPackageIncidentTaskResponseAction': return new CollectInvestigationPackageIncidentTaskResponseAction();
                case '#microsoft.graph.security.disableUserIncidentTaskResponseAction': return new DisableUserIncidentTaskResponseAction();
                case '#microsoft.graph.security.enableUserIncidentTaskResponseAction': return new EnableUserIncidentTaskResponseAction();
                case '#microsoft.graph.security.forceUserPasswordResetIncidentTaskResponseAction': return new ForceUserPasswordResetIncidentTaskResponseAction();
                case '#microsoft.graph.security.hardDeleteEmailIncidentTaskResponseAction': return new HardDeleteEmailIncidentTaskResponseAction();
                case '#microsoft.graph.security.isolateDeviceIncidentTaskResponseAction': return new IsolateDeviceIncidentTaskResponseAction();
                case '#microsoft.graph.security.markUserAsCompromisedIncidentTaskResponseAction': return new MarkUserAsCompromisedIncidentTaskResponseAction();
                case '#microsoft.graph.security.requireSignInIncidentTaskResponseAction': return new RequireSignInIncidentTaskResponseAction();
                case '#microsoft.graph.security.restrictAppExecutionIncidentTaskResponseAction': return new RestrictAppExecutionIncidentTaskResponseAction();
                case '#microsoft.graph.security.runAntivirusScanIncidentTaskResponseAction': return new RunAntivirusScanIncidentTaskResponseAction();
                case '#microsoft.graph.security.softDeleteIncidentTaskResponseAction': return new SoftDeleteIncidentTaskResponseAction();
                case '#microsoft.graph.security.stopAndQuarantineFileIncidentTaskResponseAction': return new StopAndQuarantineFileIncidentTaskResponseAction();
                case '#microsoft.graph.security.unIsolateDeviceIncidentTaskResponseAction': return new UnIsolateDeviceIncidentTaskResponseAction();
                case '#microsoft.graph.security.unRestrictAppExecutionIncidentTaskResponseAction': return new UnRestrictAppExecutionIncidentTaskResponseAction();
            }
        }
        return new IncidentTaskResponseAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identifierValue' => fn(ParseNode $n) => $o->setIdentifierValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the identifierValue property value. The identifierValue property
     * @return string|null
    */
    public function getIdentifierValue(): ?string {
        $val = $this->getBackingStore()->get('identifierValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifierValue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('identifierValue', $this->getIdentifierValue());
    }

    /**
     * Sets the identifierValue property value. The identifierValue property
     * @param string|null $value Value to set for the identifierValue property.
    */
    public function setIdentifierValue(?string $value): void {
        $this->getBackingStore()->set('identifierValue', $value);
    }

}
