<?php

namespace Microsoft\Graph\Beta\Generated\Users\Item\Drives\Item\Items\Item\ListItem\CreateLink;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateLinkRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $expirationDateTime The expirationDateTime property */
    private ?DateTime $expirationDateTime = null;
    
    /** @var string|null $password The password property */
    private ?string $password = null;
    
    /** @var array<DriveRecipient>|null $recipients The recipients property */
    private ?array $recipients = null;
    
    /** @var bool|null $retainInheritedPermissions The retainInheritedPermissions property */
    private ?bool $retainInheritedPermissions = null;
    
    /** @var string|null $scope The scope property */
    private ?string $scope = null;
    
    /** @var string|null $type The type property */
    private ?string $type = null;
    
    /**
     * Instantiates a new createLinkRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateLinkRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateLinkRequestBody {
        return new CreateLinkRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'password' => function (self $o, ParseNode $n) { $o->setPassword($n->getStringValue()); },
            'recipients' => function (self $o, ParseNode $n) { $o->setRecipients($n->getCollectionOfObjectValues(DriveRecipient::class)); },
            'retainInheritedPermissions' => function (self $o, ParseNode $n) { $o->setRetainInheritedPermissions($n->getBooleanValue()); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the password property value. The password property
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the recipients property value. The recipients property
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->recipients;
    }

    /**
     * Gets the retainInheritedPermissions property value. The retainInheritedPermissions property
     * @return bool|null
    */
    public function getRetainInheritedPermissions(): ?bool {
        return $this->retainInheritedPermissions;
    }

    /**
     * Gets the scope property value. The scope property
     * @return string|null
    */
    public function getScope(): ?string {
        return $this->scope;
    }

    /**
     * Gets the type property value. The type property
     * @return string|null
    */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('password', $this->password);
        $writer->writeCollectionOfObjectValues('recipients', $this->recipients);
        $writer->writeBooleanValue('retainInheritedPermissions', $this->retainInheritedPermissions);
        $writer->writeStringValue('scope', $this->scope);
        $writer->writeStringValue('type', $this->type);
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
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the password property value. The password property
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

    /**
     * Sets the recipients property value. The recipients property
     *  @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value ): void {
        $this->recipients = $value;
    }

    /**
     * Sets the retainInheritedPermissions property value. The retainInheritedPermissions property
     *  @param bool|null $value Value to set for the retainInheritedPermissions property.
    */
    public function setRetainInheritedPermissions(?bool $value ): void {
        $this->retainInheritedPermissions = $value;
    }

    /**
     * Sets the scope property value. The scope property
     *  @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value ): void {
        $this->type = $value;
    }

}
