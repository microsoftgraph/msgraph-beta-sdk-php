<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserPrintUsageSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $completedJobCount The completedJobCount property
    */
    private ?int $completedJobCount = null;
    
    /**
     * @var int|null $incompleteJobCount The incompleteJobCount property
    */
    private ?int $incompleteJobCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Identity|null $user The user property
    */
    private ?Identity $user = null;
    
    /**
     * @var string|null $userDisplayName The userDisplayName property
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName The userPrincipalName property
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new userPrintUsageSummary and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userPrintUsageSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserPrintUsageSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserPrintUsageSummary {
        return new UserPrintUsageSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the completedJobCount property value. The completedJobCount property
     * @return int|null
    */
    public function getCompletedJobCount(): ?int {
        return $this->completedJobCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'completedJobCount' => function (ParseNode $n) use ($o) { $o->setCompletedJobCount($n->getIntegerValue()); },
            'incompleteJobCount' => function (ParseNode $n) use ($o) { $o->setIncompleteJobCount($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'user' => function (ParseNode $n) use ($o) { $o->setUser($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the incompleteJobCount property value. The incompleteJobCount property
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        return $this->incompleteJobCount;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the user property value. The user property
     * @return Identity|null
    */
    public function getUser(): ?Identity {
        return $this->user;
    }

    /**
     * Gets the userDisplayName property value. The userDisplayName property
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
    }

    /**
     * Gets the userPrincipalName property value. The userPrincipalName property
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('completedJobCount', $this->completedJobCount);
        $writer->writeIntegerValue('incompleteJobCount', $this->incompleteJobCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('user', $this->user);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
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
     * Sets the completedJobCount property value. The completedJobCount property
     *  @param int|null $value Value to set for the completedJobCount property.
    */
    public function setCompletedJobCount(?int $value ): void {
        $this->completedJobCount = $value;
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     *  @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value ): void {
        $this->incompleteJobCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the user property value. The user property
     *  @param Identity|null $value Value to set for the user property.
    */
    public function setUser(?Identity $value ): void {
        $this->user = $value;
    }

    /**
     * Sets the userDisplayName property value. The userDisplayName property
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The userPrincipalName property
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
