<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedOperationEvent extends Entity 
{
    /** @var string|null $additionalInformation Detailed human readable information for the event. */
    private ?string $additionalInformation = null;
    
    /** @var DateTime|null $creationDateTime Indicates the time when the event is created. */
    private ?DateTime $creationDateTime = null;
    
    /** @var DateTime|null $expirationDateTime This is only used when the requestType is Activate, and it indicates the expiration time for the role activation. */
    private ?DateTime $expirationDateTime = null;
    
    /** @var string|null $referenceKey Incident/Request ticket number during role activation. The value is presented only if the ticket number is provided during role activation. */
    private ?string $referenceKey = null;
    
    /** @var string|null $referenceSystem Incident/Request ticketing system provided during tole activation. The value is presented only if the ticket system is provided during role activation. */
    private ?string $referenceSystem = null;
    
    /** @var string|null $requestorId The user id of the requestor who initiates the operation. */
    private ?string $requestorId = null;
    
    /** @var string|null $requestorName The user name of the requestor who initiates the operation. */
    private ?string $requestorName = null;
    
    /** @var string|null $requestType The request operation type. The requestType value can be: Assign (role assignment), Activate (role activation), Unassign (remove role assignment), Deactivate (role deactivation), ScanAlertsNow (scan security alerts), DismissAlert (dismiss security alert), FixAlertItem (fix a security alert issue),  AccessReview_Review (review an Access Review), AccessReview_Create (create an Access Review) , AccessReview_Update (update an Access Review), AccessReview_Delete (delete an Access Review). */
    private ?string $requestType = null;
    
    /** @var string|null $roleId The id of the role that is associated with the operation. */
    private ?string $roleId = null;
    
    /** @var string|null $roleName The name of the role. */
    private ?string $roleName = null;
    
    /** @var string|null $tenantId The tenant (organization) id. */
    private ?string $tenantId = null;
    
    /** @var string|null $userId The id of the user that is associated with the operation. */
    private ?string $userId = null;
    
    /** @var string|null $userMail The user's email. */
    private ?string $userMail = null;
    
    /** @var string|null $userName The user's display name. */
    private ?string $userName = null;
    
    /**
     * Instantiates a new privilegedOperationEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedOperationEvent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedOperationEvent {
        return new PrivilegedOperationEvent();
    }

    /**
     * Gets the additionalInformation property value. Detailed human readable information for the event.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->additionalInformation;
    }

    /**
     * Gets the creationDateTime property value. Indicates the time when the event is created.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->creationDateTime;
    }

    /**
     * Gets the expirationDateTime property value. This is only used when the requestType is Activate, and it indicates the expiration time for the role activation.
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
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (self $o, ParseNode $n) { $o->setAdditionalInformation($n->getStringValue()); },
            'creationDateTime' => function (self $o, ParseNode $n) { $o->setCreationDateTime($n->getDateTimeValue()); },
            'expirationDateTime' => function (self $o, ParseNode $n) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'referenceKey' => function (self $o, ParseNode $n) { $o->setReferenceKey($n->getStringValue()); },
            'referenceSystem' => function (self $o, ParseNode $n) { $o->setReferenceSystem($n->getStringValue()); },
            'requestorId' => function (self $o, ParseNode $n) { $o->setRequestorId($n->getStringValue()); },
            'requestorName' => function (self $o, ParseNode $n) { $o->setRequestorName($n->getStringValue()); },
            'requestType' => function (self $o, ParseNode $n) { $o->setRequestType($n->getStringValue()); },
            'roleId' => function (self $o, ParseNode $n) { $o->setRoleId($n->getStringValue()); },
            'roleName' => function (self $o, ParseNode $n) { $o->setRoleName($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
            'userMail' => function (self $o, ParseNode $n) { $o->setUserMail($n->getStringValue()); },
            'userName' => function (self $o, ParseNode $n) { $o->setUserName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the referenceKey property value. Incident/Request ticket number during role activation. The value is presented only if the ticket number is provided during role activation.
     * @return string|null
    */
    public function getReferenceKey(): ?string {
        return $this->referenceKey;
    }

    /**
     * Gets the referenceSystem property value. Incident/Request ticketing system provided during tole activation. The value is presented only if the ticket system is provided during role activation.
     * @return string|null
    */
    public function getReferenceSystem(): ?string {
        return $this->referenceSystem;
    }

    /**
     * Gets the requestorId property value. The user id of the requestor who initiates the operation.
     * @return string|null
    */
    public function getRequestorId(): ?string {
        return $this->requestorId;
    }

    /**
     * Gets the requestorName property value. The user name of the requestor who initiates the operation.
     * @return string|null
    */
    public function getRequestorName(): ?string {
        return $this->requestorName;
    }

    /**
     * Gets the requestType property value. The request operation type. The requestType value can be: Assign (role assignment), Activate (role activation), Unassign (remove role assignment), Deactivate (role deactivation), ScanAlertsNow (scan security alerts), DismissAlert (dismiss security alert), FixAlertItem (fix a security alert issue),  AccessReview_Review (review an Access Review), AccessReview_Create (create an Access Review) , AccessReview_Update (update an Access Review), AccessReview_Delete (delete an Access Review).
     * @return string|null
    */
    public function getRequestType(): ?string {
        return $this->requestType;
    }

    /**
     * Gets the roleId property value. The id of the role that is associated with the operation.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->roleId;
    }

    /**
     * Gets the roleName property value. The name of the role.
     * @return string|null
    */
    public function getRoleName(): ?string {
        return $this->roleName;
    }

    /**
     * Gets the tenantId property value. The tenant (organization) id.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the userId property value. The id of the user that is associated with the operation.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userMail property value. The user's email.
     * @return string|null
    */
    public function getUserMail(): ?string {
        return $this->userMail;
    }

    /**
     * Gets the userName property value. The user's display name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->additionalInformation);
        $writer->writeDateTimeValue('creationDateTime', $this->creationDateTime);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('referenceKey', $this->referenceKey);
        $writer->writeStringValue('referenceSystem', $this->referenceSystem);
        $writer->writeStringValue('requestorId', $this->requestorId);
        $writer->writeStringValue('requestorName', $this->requestorName);
        $writer->writeStringValue('requestType', $this->requestType);
        $writer->writeStringValue('roleId', $this->roleId);
        $writer->writeStringValue('roleName', $this->roleName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userMail', $this->userMail);
        $writer->writeStringValue('userName', $this->userName);
    }

    /**
     * Sets the additionalInformation property value. Detailed human readable information for the event.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the creationDateTime property value. Indicates the time when the event is created.
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value ): void {
        $this->creationDateTime = $value;
    }

    /**
     * Sets the expirationDateTime property value. This is only used when the requestType is Activate, and it indicates the expiration time for the role activation.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the referenceKey property value. Incident/Request ticket number during role activation. The value is presented only if the ticket number is provided during role activation.
     *  @param string|null $value Value to set for the referenceKey property.
    */
    public function setReferenceKey(?string $value ): void {
        $this->referenceKey = $value;
    }

    /**
     * Sets the referenceSystem property value. Incident/Request ticketing system provided during tole activation. The value is presented only if the ticket system is provided during role activation.
     *  @param string|null $value Value to set for the referenceSystem property.
    */
    public function setReferenceSystem(?string $value ): void {
        $this->referenceSystem = $value;
    }

    /**
     * Sets the requestorId property value. The user id of the requestor who initiates the operation.
     *  @param string|null $value Value to set for the requestorId property.
    */
    public function setRequestorId(?string $value ): void {
        $this->requestorId = $value;
    }

    /**
     * Sets the requestorName property value. The user name of the requestor who initiates the operation.
     *  @param string|null $value Value to set for the requestorName property.
    */
    public function setRequestorName(?string $value ): void {
        $this->requestorName = $value;
    }

    /**
     * Sets the requestType property value. The request operation type. The requestType value can be: Assign (role assignment), Activate (role activation), Unassign (remove role assignment), Deactivate (role deactivation), ScanAlertsNow (scan security alerts), DismissAlert (dismiss security alert), FixAlertItem (fix a security alert issue),  AccessReview_Review (review an Access Review), AccessReview_Create (create an Access Review) , AccessReview_Update (update an Access Review), AccessReview_Delete (delete an Access Review).
     *  @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value ): void {
        $this->requestType = $value;
    }

    /**
     * Sets the roleId property value. The id of the role that is associated with the operation.
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value ): void {
        $this->roleId = $value;
    }

    /**
     * Sets the roleName property value. The name of the role.
     *  @param string|null $value Value to set for the roleName property.
    */
    public function setRoleName(?string $value ): void {
        $this->roleName = $value;
    }

    /**
     * Sets the tenantId property value. The tenant (organization) id.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the userId property value. The id of the user that is associated with the operation.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userMail property value. The user's email.
     *  @param string|null $value Value to set for the userMail property.
    */
    public function setUserMail(?string $value ): void {
        $this->userMail = $value;
    }

    /**
     * Sets the userName property value. The user's display name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

}
