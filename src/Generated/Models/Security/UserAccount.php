<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserAccount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $accountName The accountName property
    */
    private ?string $accountName = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $azureAdUserId The azureAdUserId property
    */
    private ?string $azureAdUserId = null;
    
    /**
     * @var string|null $domainName The domainName property
    */
    private ?string $domainName = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName property
    */
    private ?string $userPrincipalName = null;
    
    /**
     * @var string|null $userSid The userSid property
    */
    private ?string $userSid = null;
    
    /**
     * Instantiates a new userAccount and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserAccount {
        return new UserAccount();
    }

    /**
     * Gets the accountName property value. The accountName property
     * @return string|null
    */
    public function getAccountName(): ?string {
        return $this->accountName;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the azureAdUserId property value. The azureAdUserId property
     * @return string|null
    */
    public function getAzureAdUserId(): ?string {
        return $this->azureAdUserId;
    }

    /**
     * Gets the domainName property value. The domainName property
     * @return string|null
    */
    public function getDomainName(): ?string {
        return $this->domainName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountName' => function (ParseNode $n) use ($o) { $o->setAccountName($n->getStringValue()); },
            'azureAdUserId' => function (ParseNode $n) use ($o) { $o->setAzureAdUserId($n->getStringValue()); },
            'domainName' => function (ParseNode $n) use ($o) { $o->setDomainName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
            'userSid' => function (ParseNode $n) use ($o) { $o->setUserSid($n->getStringValue()); },
        ];
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Gets the userSid property value. The userSid property
     * @return string|null
    */
    public function getUserSid(): ?string {
        return $this->userSid;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('accountName', $this->accountName);
        $writer->writeStringValue('azureAdUserId', $this->azureAdUserId);
        $writer->writeStringValue('domainName', $this->domainName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
        $writer->writeStringValue('userSid', $this->userSid);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accountName property value. The accountName property
     *  @param string|null $value Value to set for the accountName property.
    */
    public function setAccountName(?string $value ): void {
        $this->accountName = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the azureAdUserId property value. The azureAdUserId property
     *  @param string|null $value Value to set for the azureAdUserId property.
    */
    public function setAzureAdUserId(?string $value ): void {
        $this->azureAdUserId = $value;
    }

    /**
     * Sets the domainName property value. The domainName property
     *  @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value ): void {
        $this->domainName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

    /**
     * Sets the userSid property value. The userSid property
     *  @param string|null $value Value to set for the userSid property.
    */
    public function setUserSid(?string $value ): void {
        $this->userSid = $value;
    }

}
