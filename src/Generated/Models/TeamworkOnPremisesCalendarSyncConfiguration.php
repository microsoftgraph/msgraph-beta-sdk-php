<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkOnPremisesCalendarSyncConfiguration implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $domain The fully qualified domain name (FQDN) of the Skype for Business Server. Use the Exchange domain if the Skype for Business SIP domain is different from the Exchange domain of the user. */
    private ?string $domain = null;
    
    /** @var string|null $domainUserName The domain and username of the console device, for example, Seattle/RanierConf. */
    private ?string $domainUserName = null;
    
    /** @var string|null $smtpAddress The Simple Mail Transfer Protocol (SMTP) address of the user account. This is only required if a different user principal name (UPN) is used to sign in to Exchange other than Microsoft Teams and Skype for Business. This is a common scenario in a hybrid environment where an on-premises Exchange server is used. */
    private ?string $smtpAddress = null;
    
    /**
     * Instantiates a new teamworkOnPremisesCalendarSyncConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkOnPremisesCalendarSyncConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkOnPremisesCalendarSyncConfiguration {
        return new TeamworkOnPremisesCalendarSyncConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the domain property value. The fully qualified domain name (FQDN) of the Skype for Business Server. Use the Exchange domain if the Skype for Business SIP domain is different from the Exchange domain of the user.
     * @return string|null
    */
    public function getDomain(): ?string {
        return $this->domain;
    }

    /**
     * Gets the domainUserName property value. The domain and username of the console device, for example, Seattle/RanierConf.
     * @return string|null
    */
    public function getDomainUserName(): ?string {
        return $this->domainUserName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'domain' => function (self $o, ParseNode $n) { $o->setDomain($n->getStringValue()); },
            'domainUserName' => function (self $o, ParseNode $n) { $o->setDomainUserName($n->getStringValue()); },
            'smtpAddress' => function (self $o, ParseNode $n) { $o->setSmtpAddress($n->getStringValue()); },
        ];
    }

    /**
     * Gets the smtpAddress property value. The Simple Mail Transfer Protocol (SMTP) address of the user account. This is only required if a different user principal name (UPN) is used to sign in to Exchange other than Microsoft Teams and Skype for Business. This is a common scenario in a hybrid environment where an on-premises Exchange server is used.
     * @return string|null
    */
    public function getSmtpAddress(): ?string {
        return $this->smtpAddress;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('domain', $this->domain);
        $writer->writeStringValue('domainUserName', $this->domainUserName);
        $writer->writeStringValue('smtpAddress', $this->smtpAddress);
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
     * Sets the domain property value. The fully qualified domain name (FQDN) of the Skype for Business Server. Use the Exchange domain if the Skype for Business SIP domain is different from the Exchange domain of the user.
     *  @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value ): void {
        $this->domain = $value;
    }

    /**
     * Sets the domainUserName property value. The domain and username of the console device, for example, Seattle/RanierConf.
     *  @param string|null $value Value to set for the domainUserName property.
    */
    public function setDomainUserName(?string $value ): void {
        $this->domainUserName = $value;
    }

    /**
     * Sets the smtpAddress property value. The Simple Mail Transfer Protocol (SMTP) address of the user account. This is only required if a different user principal name (UPN) is used to sign in to Exchange other than Microsoft Teams and Skype for Business. This is a common scenario in a hybrid environment where an on-premises Exchange server is used.
     *  @param string|null $value Value to set for the smtpAddress property.
    */
    public function setSmtpAddress(?string $value ): void {
        $this->smtpAddress = $value;
    }

}
