<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Show the home button; clicking the home button loads the Start page - this is also the default value.
*/
class EdgeHomeButtonLoadsStartPage extends EdgeHomeButtonConfiguration implements Parsable 
{
    /**
     * Instantiates a new EdgeHomeButtonLoadsStartPage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.edgeHomeButtonLoadsStartPage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdgeHomeButtonLoadsStartPage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdgeHomeButtonLoadsStartPage {
        return new EdgeHomeButtonLoadsStartPage();
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
