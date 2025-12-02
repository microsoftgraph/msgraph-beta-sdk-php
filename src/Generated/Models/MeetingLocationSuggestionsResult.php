<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MeetingLocationSuggestionsResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MeetingLocationSuggestionsResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingLocationSuggestionsResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingLocationSuggestionsResult {
        return new MeetingLocationSuggestionsResult();
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
     * Gets the emptySuggestionsReason property value. The emptySuggestionsReason property
     * @return string|null
    */
    public function getEmptySuggestionsReason(): ?string {
        $val = $this->getBackingStore()->get('emptySuggestionsReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emptySuggestionsReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emptySuggestionsReason' => fn(ParseNode $n) => $o->setEmptySuggestionsReason($n->getStringValue()),
            'meetingLocationSuggestions' => fn(ParseNode $n) => $o->setMeetingLocationSuggestions($n->getCollectionOfObjectValues([MeetingLocationSuggestion::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the meetingLocationSuggestions property value. The meetingLocationSuggestions property
     * @return array<MeetingLocationSuggestion>|null
    */
    public function getMeetingLocationSuggestions(): ?array {
        $val = $this->getBackingStore()->get('meetingLocationSuggestions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MeetingLocationSuggestion::class);
            /** @var array<MeetingLocationSuggestion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingLocationSuggestions'");
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
        $writer->writeStringValue('emptySuggestionsReason', $this->getEmptySuggestionsReason());
        $writer->writeCollectionOfObjectValues('meetingLocationSuggestions', $this->getMeetingLocationSuggestions());
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
     * Sets the emptySuggestionsReason property value. The emptySuggestionsReason property
     * @param string|null $value Value to set for the emptySuggestionsReason property.
    */
    public function setEmptySuggestionsReason(?string $value): void {
        $this->getBackingStore()->set('emptySuggestionsReason', $value);
    }

    /**
     * Sets the meetingLocationSuggestions property value. The meetingLocationSuggestions property
     * @param array<MeetingLocationSuggestion>|null $value Value to set for the meetingLocationSuggestions property.
    */
    public function setMeetingLocationSuggestions(?array $value): void {
        $this->getBackingStore()->set('meetingLocationSuggestions', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
