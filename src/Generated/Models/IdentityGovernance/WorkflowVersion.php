<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkflowVersion extends WorkflowBase implements Parsable 
{
    /**
     * @var int|null $versionNumber The versionNumber property
    */
    private ?int $versionNumber = null;
    
    /**
     * Instantiates a new workflowVersion and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.workflowVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkflowVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkflowVersion {
        return new WorkflowVersion();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'versionNumber' => function (ParseNode $n) use ($o) { $o->setVersionNumber($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the versionNumber property value. The versionNumber property
     * @return int|null
    */
    public function getVersionNumber(): ?int {
        return $this->versionNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('versionNumber', $this->versionNumber);
    }

    /**
     * Sets the versionNumber property value. The versionNumber property
     *  @param int|null $value Value to set for the versionNumber property.
    */
    public function setVersionNumber(?int $value ): void {
        $this->versionNumber = $value;
    }

}
