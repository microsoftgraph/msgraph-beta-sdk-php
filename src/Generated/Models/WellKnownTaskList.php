<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WellKnownTaskList extends BaseTaskList implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WellKnownListName_v2|null $wellKnownListName Property indicating the list name if the given list is a well-known list.. The possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
    */
    private ?WellKnownListName_v2 $wellKnownListName = null;
    
    /**
     * Instantiates a new WellKnownTaskList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WellKnownTaskList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WellKnownTaskList {
        return new WellKnownTaskList();
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'wellKnownListName' => function (ParseNode $n) use ($o) { $o->setWellKnownListName($n->getEnumValue(WellKnownListName_v2::class)); },
        ]);
    }

    /**
     * Gets the wellKnownListName property value. Property indicating the list name if the given list is a well-known list.. The possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
     * @return WellKnownListName_v2|null
    */
    public function getWellKnownListName(): ?WellKnownListName_v2 {
        return $this->wellKnownListName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('wellKnownListName', $this->wellKnownListName);
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
     * Sets the wellKnownListName property value. Property indicating the list name if the given list is a well-known list.. The possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
     *  @param WellKnownListName_v2|null $value Value to set for the wellKnownListName property.
    */
    public function setWellKnownListName(?WellKnownListName_v2 $value ): void {
        $this->wellKnownListName = $value;
    }

}
