<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MeetingCapability implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new meetingCapability and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingCapability
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingCapability {
        return new MeetingCapability();
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
     * Gets the allowAnonymousUsersToDialOut property value. Indicates whether anonymous users dialout is allowed in a meeting.
     * @return bool|null
    */
    public function getAllowAnonymousUsersToDialOut(): ?bool {
        $val = $this->getBackingStore()->get('allowAnonymousUsersToDialOut');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAnonymousUsersToDialOut'");
    }

    /**
     * Gets the allowAnonymousUsersToStartMeeting property value. Indicates whether anonymous users are allowed to start a meeting.
     * @return bool|null
    */
    public function getAllowAnonymousUsersToStartMeeting(): ?bool {
        $val = $this->getBackingStore()->get('allowAnonymousUsersToStartMeeting');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowAnonymousUsersToStartMeeting'");
    }

    /**
     * Gets the autoAdmittedUsers property value. The autoAdmittedUsers property
     * @return AutoAdmittedUsersType|null
    */
    public function getAutoAdmittedUsers(): ?AutoAdmittedUsersType {
        $val = $this->getBackingStore()->get('autoAdmittedUsers');
        if (is_null($val) || $val instanceof AutoAdmittedUsersType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoAdmittedUsers'");
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
            'allowAnonymousUsersToDialOut' => fn(ParseNode $n) => $o->setAllowAnonymousUsersToDialOut($n->getBooleanValue()),
            'allowAnonymousUsersToStartMeeting' => fn(ParseNode $n) => $o->setAllowAnonymousUsersToStartMeeting($n->getBooleanValue()),
            'autoAdmittedUsers' => fn(ParseNode $n) => $o->setAutoAdmittedUsers($n->getEnumValue(AutoAdmittedUsersType::class)),
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
        $writer->writeBooleanValue('allowAnonymousUsersToDialOut', $this->getAllowAnonymousUsersToDialOut());
        $writer->writeBooleanValue('allowAnonymousUsersToStartMeeting', $this->getAllowAnonymousUsersToStartMeeting());
        $writer->writeEnumValue('autoAdmittedUsers', $this->getAutoAdmittedUsers());
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
     * Sets the allowAnonymousUsersToDialOut property value. Indicates whether anonymous users dialout is allowed in a meeting.
     * @param bool|null $value Value to set for the allowAnonymousUsersToDialOut property.
    */
    public function setAllowAnonymousUsersToDialOut(?bool $value): void {
        $this->getBackingStore()->set('allowAnonymousUsersToDialOut', $value);
    }

    /**
     * Sets the allowAnonymousUsersToStartMeeting property value. Indicates whether anonymous users are allowed to start a meeting.
     * @param bool|null $value Value to set for the allowAnonymousUsersToStartMeeting property.
    */
    public function setAllowAnonymousUsersToStartMeeting(?bool $value): void {
        $this->getBackingStore()->set('allowAnonymousUsersToStartMeeting', $value);
    }

    /**
     * Sets the autoAdmittedUsers property value. The autoAdmittedUsers property
     * @param AutoAdmittedUsersType|null $value Value to set for the autoAdmittedUsers property.
    */
    public function setAutoAdmittedUsers(?AutoAdmittedUsersType $value): void {
        $this->getBackingStore()->set('autoAdmittedUsers', $value);
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
