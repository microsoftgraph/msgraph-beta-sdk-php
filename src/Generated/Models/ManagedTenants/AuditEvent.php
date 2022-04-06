<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditEvent extends Entity 
{
    /** @var string|null $activity A string which uniquely represents the operation that occurred. Required. Read-only. */
    private ?string $activity = null;
    
    /** @var DateTime|null $activityDateTime The time when the activity ocurred. Required. Read-only. */
    private ?DateTime $activityDateTime = null;
    
    /** @var string|null $activityId The identifier of the activity request that made the audit event. Required. Read-only. */
    private ?string $activityId = null;
    
    /** @var string|null $category A category which represents a logical grouping of activities. Required. Read-only. */
    private ?string $category = null;
    
    /** @var string|null $httpVerb The HTTP verb that was used when making the API request. Required. Read-only. */
    private ?string $httpVerb = null;
    
    /** @var string|null $initiatedByAppId The identifier of the app that was used to make the request. Required. Read-only. */
    private ?string $initiatedByAppId = null;
    
    /** @var string|null $initiatedByUpn The UPN of the user who initiated the activity. Required. Read-only. */
    private ?string $initiatedByUpn = null;
    
    /** @var string|null $initiatedByUserId The identifier of the user who initiated the activity. Required. Read-only. */
    private ?string $initiatedByUserId = null;
    
    /** @var string|null $ipAddress The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only. */
    private ?string $ipAddress = null;
    
    /** @var string|null $requestBody The raw HTTP request body. Some sensitive information may be removed. */
    private ?string $requestBody = null;
    
    /** @var string|null $requestUrl The raw HTTP request URL. Required. Read-only. */
    private ?string $requestUrl = null;
    
    /** @var string|null $tenantIds The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only. */
    private ?string $tenantIds = null;
    
    /** @var string|null $tenantNames The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only. */
    private ?string $tenantNames = null;
    
    /**
     * Instantiates a new auditEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditEvent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AuditEvent {
        return new AuditEvent();
    }

    /**
     * Gets the activity property value. A string which uniquely represents the operation that occurred. Required. Read-only.
     * @return string|null
    */
    public function getActivity(): ?string {
        return $this->activity;
    }

    /**
     * Gets the activityDateTime property value. The time when the activity ocurred. Required. Read-only.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->activityDateTime;
    }

    /**
     * Gets the activityId property value. The identifier of the activity request that made the audit event. Required. Read-only.
     * @return string|null
    */
    public function getActivityId(): ?string {
        return $this->activityId;
    }

    /**
     * Gets the category property value. A category which represents a logical grouping of activities. Required. Read-only.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => function (self $o, ParseNode $n) { $o->setActivity($n->getStringValue()); },
            'activityDateTime' => function (self $o, ParseNode $n) { $o->setActivityDateTime($n->getDateTimeValue()); },
            'activityId' => function (self $o, ParseNode $n) { $o->setActivityId($n->getStringValue()); },
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getStringValue()); },
            'httpVerb' => function (self $o, ParseNode $n) { $o->setHttpVerb($n->getStringValue()); },
            'initiatedByAppId' => function (self $o, ParseNode $n) { $o->setInitiatedByAppId($n->getStringValue()); },
            'initiatedByUpn' => function (self $o, ParseNode $n) { $o->setInitiatedByUpn($n->getStringValue()); },
            'initiatedByUserId' => function (self $o, ParseNode $n) { $o->setInitiatedByUserId($n->getStringValue()); },
            'ipAddress' => function (self $o, ParseNode $n) { $o->setIpAddress($n->getStringValue()); },
            'requestBody' => function (self $o, ParseNode $n) { $o->setRequestBody($n->getStringValue()); },
            'requestUrl' => function (self $o, ParseNode $n) { $o->setRequestUrl($n->getStringValue()); },
            'tenantIds' => function (self $o, ParseNode $n) { $o->setTenantIds($n->getStringValue()); },
            'tenantNames' => function (self $o, ParseNode $n) { $o->setTenantNames($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the httpVerb property value. The HTTP verb that was used when making the API request. Required. Read-only.
     * @return string|null
    */
    public function getHttpVerb(): ?string {
        return $this->httpVerb;
    }

    /**
     * Gets the initiatedByAppId property value. The identifier of the app that was used to make the request. Required. Read-only.
     * @return string|null
    */
    public function getInitiatedByAppId(): ?string {
        return $this->initiatedByAppId;
    }

    /**
     * Gets the initiatedByUpn property value. The UPN of the user who initiated the activity. Required. Read-only.
     * @return string|null
    */
    public function getInitiatedByUpn(): ?string {
        return $this->initiatedByUpn;
    }

    /**
     * Gets the initiatedByUserId property value. The identifier of the user who initiated the activity. Required. Read-only.
     * @return string|null
    */
    public function getInitiatedByUserId(): ?string {
        return $this->initiatedByUserId;
    }

    /**
     * Gets the ipAddress property value. The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->ipAddress;
    }

    /**
     * Gets the requestBody property value. The raw HTTP request body. Some sensitive information may be removed.
     * @return string|null
    */
    public function getRequestBody(): ?string {
        return $this->requestBody;
    }

    /**
     * Gets the requestUrl property value. The raw HTTP request URL. Required. Read-only.
     * @return string|null
    */
    public function getRequestUrl(): ?string {
        return $this->requestUrl;
    }

    /**
     * Gets the tenantIds property value. The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     * @return string|null
    */
    public function getTenantIds(): ?string {
        return $this->tenantIds;
    }

    /**
     * Gets the tenantNames property value. The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     * @return string|null
    */
    public function getTenantNames(): ?string {
        return $this->tenantNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->activity);
        $writer->writeDateTimeValue('activityDateTime', $this->activityDateTime);
        $writer->writeStringValue('activityId', $this->activityId);
        $writer->writeStringValue('category', $this->category);
        $writer->writeStringValue('httpVerb', $this->httpVerb);
        $writer->writeStringValue('initiatedByAppId', $this->initiatedByAppId);
        $writer->writeStringValue('initiatedByUpn', $this->initiatedByUpn);
        $writer->writeStringValue('initiatedByUserId', $this->initiatedByUserId);
        $writer->writeStringValue('ipAddress', $this->ipAddress);
        $writer->writeStringValue('requestBody', $this->requestBody);
        $writer->writeStringValue('requestUrl', $this->requestUrl);
        $writer->writeStringValue('tenantIds', $this->tenantIds);
        $writer->writeStringValue('tenantNames', $this->tenantNames);
    }

    /**
     * Sets the activity property value. A string which uniquely represents the operation that occurred. Required. Read-only.
     *  @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the activityDateTime property value. The time when the activity ocurred. Required. Read-only.
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value ): void {
        $this->activityDateTime = $value;
    }

    /**
     * Sets the activityId property value. The identifier of the activity request that made the audit event. Required. Read-only.
     *  @param string|null $value Value to set for the activityId property.
    */
    public function setActivityId(?string $value ): void {
        $this->activityId = $value;
    }

    /**
     * Sets the category property value. A category which represents a logical grouping of activities. Required. Read-only.
     *  @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the httpVerb property value. The HTTP verb that was used when making the API request. Required. Read-only.
     *  @param string|null $value Value to set for the httpVerb property.
    */
    public function setHttpVerb(?string $value ): void {
        $this->httpVerb = $value;
    }

    /**
     * Sets the initiatedByAppId property value. The identifier of the app that was used to make the request. Required. Read-only.
     *  @param string|null $value Value to set for the initiatedByAppId property.
    */
    public function setInitiatedByAppId(?string $value ): void {
        $this->initiatedByAppId = $value;
    }

    /**
     * Sets the initiatedByUpn property value. The UPN of the user who initiated the activity. Required. Read-only.
     *  @param string|null $value Value to set for the initiatedByUpn property.
    */
    public function setInitiatedByUpn(?string $value ): void {
        $this->initiatedByUpn = $value;
    }

    /**
     * Sets the initiatedByUserId property value. The identifier of the user who initiated the activity. Required. Read-only.
     *  @param string|null $value Value to set for the initiatedByUserId property.
    */
    public function setInitiatedByUserId(?string $value ): void {
        $this->initiatedByUserId = $value;
    }

    /**
     * Sets the ipAddress property value. The IP address of where the activity was initiated. This may be an IPv4 or IPv6 address. Required. Read-only.
     *  @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value ): void {
        $this->ipAddress = $value;
    }

    /**
     * Sets the requestBody property value. The raw HTTP request body. Some sensitive information may be removed.
     *  @param string|null $value Value to set for the requestBody property.
    */
    public function setRequestBody(?string $value ): void {
        $this->requestBody = $value;
    }

    /**
     * Sets the requestUrl property value. The raw HTTP request URL. Required. Read-only.
     *  @param string|null $value Value to set for the requestUrl property.
    */
    public function setRequestUrl(?string $value ): void {
        $this->requestUrl = $value;
    }

    /**
     * Sets the tenantIds property value. The collection of Azure Active Directory tenant identifiers for the managed tenants that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     *  @param string|null $value Value to set for the tenantIds property.
    */
    public function setTenantIds(?string $value ): void {
        $this->tenantIds = $value;
    }

    /**
     * Sets the tenantNames property value. The collection of tenant names that were impacted by this change. This is formatted as a list of comma-separated values. Required. Read-only.
     *  @param string|null $value Value to set for the tenantNames property.
    */
    public function setTenantNames(?string $value ): void {
        $this->tenantNames = $value;
    }

}
