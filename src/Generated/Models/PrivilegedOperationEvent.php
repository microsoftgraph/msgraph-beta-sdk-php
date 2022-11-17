<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedOperationEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedOperationEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedOperationEvent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedOperationEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedOperationEvent {
        return new PrivilegedOperationEvent();
    }

    /**
     * Gets the additionalInformation property value. Detailed human readable information for the event.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        return $this->getBackingStore()->get('additionalInformation');
    }

    /**
     * Gets the creationDateTime property value. Indicates the time when the event is created.
     * @return DateTime|null
    */
    public function getCreationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('creationDateTime');
    }

    /**
     * Gets the expirationDateTime property value. This is only used when the requestType is Activate, and it indicates the expiration time for the role activation.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'creationDateTime' => fn(ParseNode $n) => $o->setCreationDateTime($n->getDateTimeValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'referenceKey' => fn(ParseNode $n) => $o->setReferenceKey($n->getStringValue()),
            'referenceSystem' => fn(ParseNode $n) => $o->setReferenceSystem($n->getStringValue()),
            'requestorId' => fn(ParseNode $n) => $o->setRequestorId($n->getStringValue()),
            'requestorName' => fn(ParseNode $n) => $o->setRequestorName($n->getStringValue()),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getStringValue()),
            'roleId' => fn(ParseNode $n) => $o->setRoleId($n->getStringValue()),
            'roleName' => fn(ParseNode $n) => $o->setRoleName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userMail' => fn(ParseNode $n) => $o->setUserMail($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the referenceKey property value. Incident/Request ticket number during role activation. The value is presented only if the ticket number is provided during role activation.
     * @return string|null
    */
    public function getReferenceKey(): ?string {
        return $this->getBackingStore()->get('referenceKey');
    }

    /**
     * Gets the referenceSystem property value. Incident/Request ticketing system provided during tole activation. The value is presented only if the ticket system is provided during role activation.
     * @return string|null
    */
    public function getReferenceSystem(): ?string {
        return $this->getBackingStore()->get('referenceSystem');
    }

    /**
     * Gets the requestorId property value. The user id of the requestor who initiates the operation.
     * @return string|null
    */
    public function getRequestorId(): ?string {
        return $this->getBackingStore()->get('requestorId');
    }

    /**
     * Gets the requestorName property value. The user name of the requestor who initiates the operation.
     * @return string|null
    */
    public function getRequestorName(): ?string {
        return $this->getBackingStore()->get('requestorName');
    }

    /**
     * Gets the requestType property value. The request operation type. The requestType value can be: Assign (role assignment), Activate (role activation), Unassign (remove role assignment), Deactivate (role deactivation), ScanAlertsNow (scan security alerts), DismissAlert (dismiss security alert), FixAlertItem (fix a security alert issue),  AccessReview_Review (review an Access Review), AccessReview_Create (create an Access Review) , AccessReview_Update (update an Access Review), AccessReview_Delete (delete an Access Review).
     * @return string|null
    */
    public function getRequestType(): ?string {
        return $this->getBackingStore()->get('requestType');
    }

    /**
     * Gets the roleId property value. The id of the role that is associated with the operation.
     * @return string|null
    */
    public function getRoleId(): ?string {
        return $this->getBackingStore()->get('roleId');
    }

    /**
     * Gets the roleName property value. The name of the role.
     * @return string|null
    */
    public function getRoleName(): ?string {
        return $this->getBackingStore()->get('roleName');
    }

    /**
     * Gets the tenantId property value. The tenant (organization) id.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the userId property value. The id of the user that is associated with the operation.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userMail property value. The user's email.
     * @return string|null
    */
    public function getUserMail(): ?string {
        return $this->getBackingStore()->get('userMail');
    }

    /**
     * Gets the userName property value. The user's display name.
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeDateTimeValue('creationDateTime', $this->getCreationDateTime());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('referenceKey', $this->getReferenceKey());
        $writer->writeStringValue('referenceSystem', $this->getReferenceSystem());
        $writer->writeStringValue('requestorId', $this->getRequestorId());
        $writer->writeStringValue('requestorName', $this->getRequestorName());
        $writer->writeStringValue('requestType', $this->getRequestType());
        $writer->writeStringValue('roleId', $this->getRoleId());
        $writer->writeStringValue('roleName', $this->getRoleName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userMail', $this->getUserMail());
        $writer->writeStringValue('userName', $this->getUserName());
    }

    /**
     * Sets the additionalInformation property value. Detailed human readable information for the event.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the creationDateTime property value. Indicates the time when the event is created.
     *  @param DateTime|null $value Value to set for the creationDateTime property.
    */
    public function setCreationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('creationDateTime', $value);
    }

    /**
     * Sets the expirationDateTime property value. This is only used when the requestType is Activate, and it indicates the expiration time for the role activation.
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the referenceKey property value. Incident/Request ticket number during role activation. The value is presented only if the ticket number is provided during role activation.
     *  @param string|null $value Value to set for the referenceKey property.
    */
    public function setReferenceKey(?string $value): void {
        $this->getBackingStore()->set('referenceKey', $value);
    }

    /**
     * Sets the referenceSystem property value. Incident/Request ticketing system provided during tole activation. The value is presented only if the ticket system is provided during role activation.
     *  @param string|null $value Value to set for the referenceSystem property.
    */
    public function setReferenceSystem(?string $value): void {
        $this->getBackingStore()->set('referenceSystem', $value);
    }

    /**
     * Sets the requestorId property value. The user id of the requestor who initiates the operation.
     *  @param string|null $value Value to set for the requestorId property.
    */
    public function setRequestorId(?string $value): void {
        $this->getBackingStore()->set('requestorId', $value);
    }

    /**
     * Sets the requestorName property value. The user name of the requestor who initiates the operation.
     *  @param string|null $value Value to set for the requestorName property.
    */
    public function setRequestorName(?string $value): void {
        $this->getBackingStore()->set('requestorName', $value);
    }

    /**
     * Sets the requestType property value. The request operation type. The requestType value can be: Assign (role assignment), Activate (role activation), Unassign (remove role assignment), Deactivate (role deactivation), ScanAlertsNow (scan security alerts), DismissAlert (dismiss security alert), FixAlertItem (fix a security alert issue),  AccessReview_Review (review an Access Review), AccessReview_Create (create an Access Review) , AccessReview_Update (update an Access Review), AccessReview_Delete (delete an Access Review).
     *  @param string|null $value Value to set for the requestType property.
    */
    public function setRequestType(?string $value): void {
        $this->getBackingStore()->set('requestType', $value);
    }

    /**
     * Sets the roleId property value. The id of the role that is associated with the operation.
     *  @param string|null $value Value to set for the roleId property.
    */
    public function setRoleId(?string $value): void {
        $this->getBackingStore()->set('roleId', $value);
    }

    /**
     * Sets the roleName property value. The name of the role.
     *  @param string|null $value Value to set for the roleName property.
    */
    public function setRoleName(?string $value): void {
        $this->getBackingStore()->set('roleName', $value);
    }

    /**
     * Sets the tenantId property value. The tenant (organization) id.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the userId property value. The id of the user that is associated with the operation.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userMail property value. The user's email.
     *  @param string|null $value Value to set for the userMail property.
    */
    public function setUserMail(?string $value): void {
        $this->getBackingStore()->set('userMail', $value);
    }

    /**
     * Sets the userName property value. The user's display name.
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

}
