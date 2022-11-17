<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SubjectRightsRequestEnumeratedMailboxLocation extends SubjectRightsRequestMailboxLocation implements Parsable 
{
    /**
     * Instantiates a new SubjectRightsRequestEnumeratedMailboxLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.subjectRightsRequestEnumeratedMailboxLocation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestEnumeratedMailboxLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestEnumeratedMailboxLocation {
        return new SubjectRightsRequestEnumeratedMailboxLocation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'upns' => fn(ParseNode $n) => $o->setUpns($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the upns property value. Collection of mailboxes that should be included in the search. Includes the UPN (user principal name) of each mailbox, for example, Monica.Thompson@contoso.com.
     * @return array<string>|null
    */
    public function getUpns(): ?array {
        return $this->getBackingStore()->get('upns');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('upns', $this->getUpns());
    }

    /**
     * Sets the upns property value. Collection of mailboxes that should be included in the search. Includes the UPN (user principal name) of each mailbox, for example, Monica.Thompson@contoso.com.
     *  @param array<string>|null $value Value to set for the upns property.
    */
    public function setUpns(?array $value): void {
        $this->getBackingStore()->set('upns', $value);
    }

}
