<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ForceUserPasswordResetIncidentTaskResponseAction extends IncidentTaskResponseAction implements Parsable 
{
    /**
     * Instantiates a new ForceUserPasswordResetIncidentTaskResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.forceUserPasswordResetIncidentTaskResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ForceUserPasswordResetIncidentTaskResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ForceUserPasswordResetIncidentTaskResponseAction {
        return new ForceUserPasswordResetIncidentTaskResponseAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

}
