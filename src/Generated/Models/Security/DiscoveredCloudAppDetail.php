<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DiscoveredCloudAppDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new DiscoveredCloudAppDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscoveredCloudAppDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscoveredCloudAppDetail {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.endpointDiscoveredCloudAppDetail': return new EndpointDiscoveredCloudAppDetail();
            }
        }
        return new DiscoveredCloudAppDetail();
    }

    /**
     * Gets the appInfo property value. The application information.
     * @return DiscoveredCloudAppInfo|null
    */
    public function getAppInfo(): ?DiscoveredCloudAppInfo {
        $val = $this->getBackingStore()->get('appInfo');
        if (is_null($val) || $val instanceof DiscoveredCloudAppInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appInfo'");
    }

    /**
     * Gets the category property value. The category property
     * @return AppCategory|null
    */
    public function getCategory(): ?AppCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof AppCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The app name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the domains property value. The domain.
     * @return array<string>|null
    */
    public function getDomains(): ?array {
        $val = $this->getBackingStore()->get('domains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domains'");
    }

    /**
     * Gets the downloadNetworkTrafficInBytes property value. The download traffic size.
     * @return int|null
    */
    public function getDownloadNetworkTrafficInBytes(): ?int {
        $val = $this->getBackingStore()->get('downloadNetworkTrafficInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'downloadNetworkTrafficInBytes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appInfo' => fn(ParseNode $n) => $o->setAppInfo($n->getObjectValue([DiscoveredCloudAppInfo::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(AppCategory::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDomains($val);
            },
            'downloadNetworkTrafficInBytes' => fn(ParseNode $n) => $o->setDownloadNetworkTrafficInBytes($n->getIntegerValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'ipAddressCount' => fn(ParseNode $n) => $o->setIpAddressCount($n->getIntegerValue()),
            'ipAddresses' => fn(ParseNode $n) => $o->setIpAddresses($n->getCollectionOfObjectValues([DiscoveredCloudAppIPAddress::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'riskScore' => fn(ParseNode $n) => $o->setRiskScore($n->getIntegerValue()),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'transactionCount' => fn(ParseNode $n) => $o->setTransactionCount($n->getIntegerValue()),
            'uploadNetworkTrafficInBytes' => fn(ParseNode $n) => $o->setUploadNetworkTrafficInBytes($n->getIntegerValue()),
            'userCount' => fn(ParseNode $n) => $o->setUserCount($n->getIntegerValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([DiscoveredCloudAppUser::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The firstSeenDateTime property
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstSeenDateTime'");
    }

    /**
     * Gets the ipAddressCount property value. The IP address.
     * @return int|null
    */
    public function getIpAddressCount(): ?int {
        $val = $this->getBackingStore()->get('ipAddressCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddressCount'");
    }

    /**
     * Gets the ipAddresses property value. The list of IP addresses accessed by the app.
     * @return array<DiscoveredCloudAppIPAddress>|null
    */
    public function getIpAddresses(): ?array {
        $val = $this->getBackingStore()->get('ipAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DiscoveredCloudAppIPAddress::class);
            /** @var array<DiscoveredCloudAppIPAddress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddresses'");
    }

    /**
     * Gets the lastSeenDateTime property value. The last seen date of the discovered app. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSeenDateTime'");
    }

    /**
     * Gets the riskScore property value. The risk score of the app.
     * @return int|null
    */
    public function getRiskScore(): ?int {
        $val = $this->getBackingStore()->get('riskScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'riskScore'");
    }

    /**
     * Gets the tags property value. The tags applied to an app. Possible values include Unsanctioned, Sanctioned, Monitored, or a custom value.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the transactionCount property value. The app transaction count.
     * @return int|null
    */
    public function getTransactionCount(): ?int {
        $val = $this->getBackingStore()->get('transactionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transactionCount'");
    }

    /**
     * Gets the uploadNetworkTrafficInBytes property value. The app upload traffic size, in bytes.
     * @return int|null
    */
    public function getUploadNetworkTrafficInBytes(): ?int {
        $val = $this->getBackingStore()->get('uploadNetworkTrafficInBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadNetworkTrafficInBytes'");
    }

    /**
     * Gets the userCount property value. The count of users who use the app.
     * @return int|null
    */
    public function getUserCount(): ?int {
        $val = $this->getBackingStore()->get('userCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userCount'");
    }

    /**
     * Gets the users property value. The list of users who access the app.
     * @return array<DiscoveredCloudAppUser>|null
    */
    public function getUsers(): ?array {
        $val = $this->getBackingStore()->get('users');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DiscoveredCloudAppUser::class);
            /** @var array<DiscoveredCloudAppUser>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appInfo', $this->getAppInfo());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfPrimitiveValues('domains', $this->getDomains());
        $writer->writeIntegerValue('downloadNetworkTrafficInBytes', $this->getDownloadNetworkTrafficInBytes());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeIntegerValue('ipAddressCount', $this->getIpAddressCount());
        $writer->writeCollectionOfObjectValues('ipAddresses', $this->getIpAddresses());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeIntegerValue('riskScore', $this->getRiskScore());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeIntegerValue('transactionCount', $this->getTransactionCount());
        $writer->writeIntegerValue('uploadNetworkTrafficInBytes', $this->getUploadNetworkTrafficInBytes());
        $writer->writeIntegerValue('userCount', $this->getUserCount());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
    }

    /**
     * Sets the appInfo property value. The application information.
     * @param DiscoveredCloudAppInfo|null $value Value to set for the appInfo property.
    */
    public function setAppInfo(?DiscoveredCloudAppInfo $value): void {
        $this->getBackingStore()->set('appInfo', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param AppCategory|null $value Value to set for the category property.
    */
    public function setCategory(?AppCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The app name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domains property value. The domain.
     * @param array<string>|null $value Value to set for the domains property.
    */
    public function setDomains(?array $value): void {
        $this->getBackingStore()->set('domains', $value);
    }

    /**
     * Sets the downloadNetworkTrafficInBytes property value. The download traffic size.
     * @param int|null $value Value to set for the downloadNetworkTrafficInBytes property.
    */
    public function setDownloadNetworkTrafficInBytes(?int $value): void {
        $this->getBackingStore()->set('downloadNetworkTrafficInBytes', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The firstSeenDateTime property
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the ipAddressCount property value. The IP address.
     * @param int|null $value Value to set for the ipAddressCount property.
    */
    public function setIpAddressCount(?int $value): void {
        $this->getBackingStore()->set('ipAddressCount', $value);
    }

    /**
     * Sets the ipAddresses property value. The list of IP addresses accessed by the app.
     * @param array<DiscoveredCloudAppIPAddress>|null $value Value to set for the ipAddresses property.
    */
    public function setIpAddresses(?array $value): void {
        $this->getBackingStore()->set('ipAddresses', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The last seen date of the discovered app. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the riskScore property value. The risk score of the app.
     * @param int|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?int $value): void {
        $this->getBackingStore()->set('riskScore', $value);
    }

    /**
     * Sets the tags property value. The tags applied to an app. Possible values include Unsanctioned, Sanctioned, Monitored, or a custom value.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the transactionCount property value. The app transaction count.
     * @param int|null $value Value to set for the transactionCount property.
    */
    public function setTransactionCount(?int $value): void {
        $this->getBackingStore()->set('transactionCount', $value);
    }

    /**
     * Sets the uploadNetworkTrafficInBytes property value. The app upload traffic size, in bytes.
     * @param int|null $value Value to set for the uploadNetworkTrafficInBytes property.
    */
    public function setUploadNetworkTrafficInBytes(?int $value): void {
        $this->getBackingStore()->set('uploadNetworkTrafficInBytes', $value);
    }

    /**
     * Sets the userCount property value. The count of users who use the app.
     * @param int|null $value Value to set for the userCount property.
    */
    public function setUserCount(?int $value): void {
        $this->getBackingStore()->set('userCount', $value);
    }

    /**
     * Sets the users property value. The list of users who access the app.
     * @param array<DiscoveredCloudAppUser>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

}
