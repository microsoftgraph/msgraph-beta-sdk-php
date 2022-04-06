<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ShareAction implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<IdentitySet>|null $recipients The identities the item was shared with in this action. */
    private ?array $recipients = null;
    
    /**
     * Instantiates a new shareAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShareAction
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ShareAction {
        return new ShareAction();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'recipients' => function (self $o, ParseNode $n) { $o->setRecipients($n->getCollectionOfObjectValues(IdentitySet::class)); },
        ];
    }

    /**
     * Gets the recipients property value. The identities the item was shared with in this action.
     * @return array<IdentitySet>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('recipients', $this->recipients);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the recipients property value. The identities the item was shared with in this action.
     *  @param array<IdentitySet>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

}
