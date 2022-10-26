<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingCapability implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowAnonymousUsersToDialOut Indicates whether anonymous users dialout is allowed in a meeting.
    */
    private ?bool $allowAnonymousUsersToDialOut = null;
    
    /**
     * @var bool|null $allowAnonymousUsersToStartMeeting Indicates whether anonymous users are allowed to start a meeting.
    */
    private ?bool $allowAnonymousUsersToStartMeeting = null;
    
    /**
     * @var AutoAdmittedUsersType|null $autoAdmittedUsers The autoAdmittedUsers property
    */
    private ?AutoAdmittedUsersType $autoAdmittedUsers = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new meetingCapability and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.meetingCapability');
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowAnonymousUsersToDialOut property value. Indicates whether anonymous users dialout is allowed in a meeting.
     * @return bool|null
    */
    public function getAllowAnonymousUsersToDialOut(): ?bool {
        return $this->allowAnonymousUsersToDialOut;
    }

    /**
     * Gets the allowAnonymousUsersToStartMeeting property value. Indicates whether anonymous users are allowed to start a meeting.
     * @return bool|null
    */
    public function getAllowAnonymousUsersToStartMeeting(): ?bool {
        return $this->allowAnonymousUsersToStartMeeting;
    }

    /**
     * Gets the autoAdmittedUsers property value. The autoAdmittedUsers property
     * @return AutoAdmittedUsersType|null
    */
    public function getAutoAdmittedUsers(): ?AutoAdmittedUsersType {
        return $this->autoAdmittedUsers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowAnonymousUsersToDialOut', $this->allowAnonymousUsersToDialOut);
        $writer->writeBooleanValue('allowAnonymousUsersToStartMeeting', $this->allowAnonymousUsersToStartMeeting);
        $writer->writeEnumValue('autoAdmittedUsers', $this->autoAdmittedUsers);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the allowAnonymousUsersToDialOut property value. Indicates whether anonymous users dialout is allowed in a meeting.
     *  @param bool|null $value Value to set for the allowAnonymousUsersToDialOut property.
    */
    public function setAllowAnonymousUsersToDialOut(?bool $value ): void {
        $this->allowAnonymousUsersToDialOut = $value;
    }

    /**
     * Sets the allowAnonymousUsersToStartMeeting property value. Indicates whether anonymous users are allowed to start a meeting.
     *  @param bool|null $value Value to set for the allowAnonymousUsersToStartMeeting property.
    */
    public function setAllowAnonymousUsersToStartMeeting(?bool $value ): void {
        $this->allowAnonymousUsersToStartMeeting = $value;
    }

    /**
     * Sets the autoAdmittedUsers property value. The autoAdmittedUsers property
     *  @param AutoAdmittedUsersType|null $value Value to set for the autoAdmittedUsers property.
    */
    public function setAutoAdmittedUsers(?AutoAdmittedUsersType $value ): void {
        $this->autoAdmittedUsers = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
