<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsFirewallNetworkProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $authorizedApplicationRulesFromGroupPolicyMerged Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $authorizedApplicationRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $authorizedApplicationRulesFromGroupPolicyNotMerged Configures the firewall to prevent merging authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $authorizedApplicationRulesFromGroupPolicyNotMerged = null;
    
    /**
     * @var bool|null $connectionSecurityRulesFromGroupPolicyMerged Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $connectionSecurityRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $connectionSecurityRulesFromGroupPolicyNotMerged Configures the firewall to prevent merging connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $connectionSecurityRulesFromGroupPolicyNotMerged = null;
    
    /**
     * @var StateManagementSetting|null $firewallEnabled State Management Setting.
    */
    private ?StateManagementSetting $firewallEnabled = null;
    
    /**
     * @var bool|null $globalPortRulesFromGroupPolicyMerged Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $globalPortRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $globalPortRulesFromGroupPolicyNotMerged Configures the firewall to prevent merging global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $globalPortRulesFromGroupPolicyNotMerged = null;
    
    /**
     * @var bool|null $inboundConnectionsBlocked Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
    */
    private ?bool $inboundConnectionsBlocked = null;
    
    /**
     * @var bool|null $inboundConnectionsRequired Configures the firewall to allow all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
    */
    private ?bool $inboundConnectionsRequired = null;
    
    /**
     * @var bool|null $inboundNotificationsBlocked Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
    */
    private ?bool $inboundNotificationsBlocked = null;
    
    /**
     * @var bool|null $inboundNotificationsRequired Allows the firewall to display notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
    */
    private ?bool $inboundNotificationsRequired = null;
    
    /**
     * @var bool|null $incomingTrafficBlocked Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
    */
    private ?bool $incomingTrafficBlocked = null;
    
    /**
     * @var bool|null $incomingTrafficRequired Configures the firewall to allow incoming traffic pursuant to other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
    */
    private ?bool $incomingTrafficRequired = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $outboundConnectionsBlocked Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
    */
    private ?bool $outboundConnectionsBlocked = null;
    
    /**
     * @var bool|null $outboundConnectionsRequired Configures the firewall to allow all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
    */
    private ?bool $outboundConnectionsRequired = null;
    
    /**
     * @var bool|null $policyRulesFromGroupPolicyMerged Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $policyRulesFromGroupPolicyMerged = null;
    
    /**
     * @var bool|null $policyRulesFromGroupPolicyNotMerged Configures the firewall to prevent merging Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
    */
    private ?bool $policyRulesFromGroupPolicyNotMerged = null;
    
    /**
     * @var bool|null $securedPacketExemptionAllowed Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
    */
    private ?bool $securedPacketExemptionAllowed = null;
    
    /**
     * @var bool|null $securedPacketExemptionBlocked Configures the firewall to block the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
    */
    private ?bool $securedPacketExemptionBlocked = null;
    
    /**
     * @var bool|null $stealthModeBlocked Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
    */
    private ?bool $stealthModeBlocked = null;
    
    /**
     * @var bool|null $stealthModeRequired Allow the server to operate in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
    */
    private ?bool $stealthModeRequired = null;
    
    /**
     * @var bool|null $unicastResponsesToMulticastBroadcastsBlocked Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
    */
    private ?bool $unicastResponsesToMulticastBroadcastsBlocked = null;
    
    /**
     * @var bool|null $unicastResponsesToMulticastBroadcastsRequired Configures the firewall to allow unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
    */
    private ?bool $unicastResponsesToMulticastBroadcastsRequired = null;
    
    /**
     * Instantiates a new windowsFirewallNetworkProfile and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsFirewallNetworkProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsFirewallNetworkProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsFirewallNetworkProfile {
        return new WindowsFirewallNetworkProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyMerged(): ?bool {
        return $this->authorizedApplicationRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the authorizedApplicationRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->authorizedApplicationRulesFromGroupPolicyNotMerged;
    }

    /**
     * Gets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getConnectionSecurityRulesFromGroupPolicyMerged(): ?bool {
        return $this->connectionSecurityRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the connectionSecurityRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getConnectionSecurityRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->connectionSecurityRulesFromGroupPolicyNotMerged;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizedApplicationRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setAuthorizedApplicationRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'authorizedApplicationRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setAuthorizedApplicationRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'connectionSecurityRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setConnectionSecurityRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'connectionSecurityRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setConnectionSecurityRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'firewallEnabled' => fn(ParseNode $n) => $o->setFirewallEnabled($n->getEnumValue(StateManagementSetting::class)),
            'globalPortRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setGlobalPortRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'globalPortRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setGlobalPortRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'inboundConnectionsBlocked' => fn(ParseNode $n) => $o->setInboundConnectionsBlocked($n->getBooleanValue()),
            'inboundConnectionsRequired' => fn(ParseNode $n) => $o->setInboundConnectionsRequired($n->getBooleanValue()),
            'inboundNotificationsBlocked' => fn(ParseNode $n) => $o->setInboundNotificationsBlocked($n->getBooleanValue()),
            'inboundNotificationsRequired' => fn(ParseNode $n) => $o->setInboundNotificationsRequired($n->getBooleanValue()),
            'incomingTrafficBlocked' => fn(ParseNode $n) => $o->setIncomingTrafficBlocked($n->getBooleanValue()),
            'incomingTrafficRequired' => fn(ParseNode $n) => $o->setIncomingTrafficRequired($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outboundConnectionsBlocked' => fn(ParseNode $n) => $o->setOutboundConnectionsBlocked($n->getBooleanValue()),
            'outboundConnectionsRequired' => fn(ParseNode $n) => $o->setOutboundConnectionsRequired($n->getBooleanValue()),
            'policyRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setPolicyRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'policyRulesFromGroupPolicyNotMerged' => fn(ParseNode $n) => $o->setPolicyRulesFromGroupPolicyNotMerged($n->getBooleanValue()),
            'securedPacketExemptionAllowed' => fn(ParseNode $n) => $o->setSecuredPacketExemptionAllowed($n->getBooleanValue()),
            'securedPacketExemptionBlocked' => fn(ParseNode $n) => $o->setSecuredPacketExemptionBlocked($n->getBooleanValue()),
            'stealthModeBlocked' => fn(ParseNode $n) => $o->setStealthModeBlocked($n->getBooleanValue()),
            'stealthModeRequired' => fn(ParseNode $n) => $o->setStealthModeRequired($n->getBooleanValue()),
            'unicastResponsesToMulticastBroadcastsBlocked' => fn(ParseNode $n) => $o->setUnicastResponsesToMulticastBroadcastsBlocked($n->getBooleanValue()),
            'unicastResponsesToMulticastBroadcastsRequired' => fn(ParseNode $n) => $o->setUnicastResponsesToMulticastBroadcastsRequired($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the firewallEnabled property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getFirewallEnabled(): ?StateManagementSetting {
        return $this->firewallEnabled;
    }

    /**
     * Gets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getGlobalPortRulesFromGroupPolicyMerged(): ?bool {
        return $this->globalPortRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the globalPortRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getGlobalPortRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->globalPortRulesFromGroupPolicyNotMerged;
    }

    /**
     * Gets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundConnectionsBlocked(): ?bool {
        return $this->inboundConnectionsBlocked;
    }

    /**
     * Gets the inboundConnectionsRequired property value. Configures the firewall to allow all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundConnectionsRequired(): ?bool {
        return $this->inboundConnectionsRequired;
    }

    /**
     * Gets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundNotificationsBlocked(): ?bool {
        return $this->inboundNotificationsBlocked;
    }

    /**
     * Gets the inboundNotificationsRequired property value. Allows the firewall to display notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundNotificationsRequired(): ?bool {
        return $this->inboundNotificationsRequired;
    }

    /**
     * Gets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @return bool|null
    */
    public function getIncomingTrafficBlocked(): ?bool {
        return $this->incomingTrafficBlocked;
    }

    /**
     * Gets the incomingTrafficRequired property value. Configures the firewall to allow incoming traffic pursuant to other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @return bool|null
    */
    public function getIncomingTrafficRequired(): ?bool {
        return $this->incomingTrafficRequired;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @return bool|null
    */
    public function getOutboundConnectionsBlocked(): ?bool {
        return $this->outboundConnectionsBlocked;
    }

    /**
     * Gets the outboundConnectionsRequired property value. Configures the firewall to allow all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @return bool|null
    */
    public function getOutboundConnectionsRequired(): ?bool {
        return $this->outboundConnectionsRequired;
    }

    /**
     * Gets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getPolicyRulesFromGroupPolicyMerged(): ?bool {
        return $this->policyRulesFromGroupPolicyMerged;
    }

    /**
     * Gets the policyRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getPolicyRulesFromGroupPolicyNotMerged(): ?bool {
        return $this->policyRulesFromGroupPolicyNotMerged;
    }

    /**
     * Gets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @return bool|null
    */
    public function getSecuredPacketExemptionAllowed(): ?bool {
        return $this->securedPacketExemptionAllowed;
    }

    /**
     * Gets the securedPacketExemptionBlocked property value. Configures the firewall to block the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @return bool|null
    */
    public function getSecuredPacketExemptionBlocked(): ?bool {
        return $this->securedPacketExemptionBlocked;
    }

    /**
     * Gets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @return bool|null
    */
    public function getStealthModeBlocked(): ?bool {
        return $this->stealthModeBlocked;
    }

    /**
     * Gets the stealthModeRequired property value. Allow the server to operate in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @return bool|null
    */
    public function getStealthModeRequired(): ?bool {
        return $this->stealthModeRequired;
    }

    /**
     * Gets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @return bool|null
    */
    public function getUnicastResponsesToMulticastBroadcastsBlocked(): ?bool {
        return $this->unicastResponsesToMulticastBroadcastsBlocked;
    }

    /**
     * Gets the unicastResponsesToMulticastBroadcastsRequired property value. Configures the firewall to allow unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @return bool|null
    */
    public function getUnicastResponsesToMulticastBroadcastsRequired(): ?bool {
        return $this->unicastResponsesToMulticastBroadcastsRequired;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('authorizedApplicationRulesFromGroupPolicyMerged', $this->authorizedApplicationRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('authorizedApplicationRulesFromGroupPolicyNotMerged', $this->authorizedApplicationRulesFromGroupPolicyNotMerged);
        $writer->writeBooleanValue('connectionSecurityRulesFromGroupPolicyMerged', $this->connectionSecurityRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('connectionSecurityRulesFromGroupPolicyNotMerged', $this->connectionSecurityRulesFromGroupPolicyNotMerged);
        $writer->writeEnumValue('firewallEnabled', $this->firewallEnabled);
        $writer->writeBooleanValue('globalPortRulesFromGroupPolicyMerged', $this->globalPortRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('globalPortRulesFromGroupPolicyNotMerged', $this->globalPortRulesFromGroupPolicyNotMerged);
        $writer->writeBooleanValue('inboundConnectionsBlocked', $this->inboundConnectionsBlocked);
        $writer->writeBooleanValue('inboundConnectionsRequired', $this->inboundConnectionsRequired);
        $writer->writeBooleanValue('inboundNotificationsBlocked', $this->inboundNotificationsBlocked);
        $writer->writeBooleanValue('inboundNotificationsRequired', $this->inboundNotificationsRequired);
        $writer->writeBooleanValue('incomingTrafficBlocked', $this->incomingTrafficBlocked);
        $writer->writeBooleanValue('incomingTrafficRequired', $this->incomingTrafficRequired);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('outboundConnectionsBlocked', $this->outboundConnectionsBlocked);
        $writer->writeBooleanValue('outboundConnectionsRequired', $this->outboundConnectionsRequired);
        $writer->writeBooleanValue('policyRulesFromGroupPolicyMerged', $this->policyRulesFromGroupPolicyMerged);
        $writer->writeBooleanValue('policyRulesFromGroupPolicyNotMerged', $this->policyRulesFromGroupPolicyNotMerged);
        $writer->writeBooleanValue('securedPacketExemptionAllowed', $this->securedPacketExemptionAllowed);
        $writer->writeBooleanValue('securedPacketExemptionBlocked', $this->securedPacketExemptionBlocked);
        $writer->writeBooleanValue('stealthModeBlocked', $this->stealthModeBlocked);
        $writer->writeBooleanValue('stealthModeRequired', $this->stealthModeRequired);
        $writer->writeBooleanValue('unicastResponsesToMulticastBroadcastsBlocked', $this->unicastResponsesToMulticastBroadcastsBlocked);
        $writer->writeBooleanValue('unicastResponsesToMulticastBroadcastsRequired', $this->unicastResponsesToMulticastBroadcastsRequired);
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
     * Sets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the authorizedApplicationRulesFromGroupPolicyMerged property.
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->authorizedApplicationRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the authorizedApplicationRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the authorizedApplicationRulesFromGroupPolicyNotMerged property.
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyNotMerged(?bool $value ): void {
        $this->authorizedApplicationRulesFromGroupPolicyNotMerged = $value;
    }

    /**
     * Sets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the connectionSecurityRulesFromGroupPolicyMerged property.
    */
    public function setConnectionSecurityRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->connectionSecurityRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the connectionSecurityRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the connectionSecurityRulesFromGroupPolicyNotMerged property.
    */
    public function setConnectionSecurityRulesFromGroupPolicyNotMerged(?bool $value ): void {
        $this->connectionSecurityRulesFromGroupPolicyNotMerged = $value;
    }

    /**
     * Sets the firewallEnabled property value. State Management Setting.
     *  @param StateManagementSetting|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?StateManagementSetting $value ): void {
        $this->firewallEnabled = $value;
    }

    /**
     * Sets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the globalPortRulesFromGroupPolicyMerged property.
    */
    public function setGlobalPortRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->globalPortRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the globalPortRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the globalPortRulesFromGroupPolicyNotMerged property.
    */
    public function setGlobalPortRulesFromGroupPolicyNotMerged(?bool $value ): void {
        $this->globalPortRulesFromGroupPolicyNotMerged = $value;
    }

    /**
     * Sets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     *  @param bool|null $value Value to set for the inboundConnectionsBlocked property.
    */
    public function setInboundConnectionsBlocked(?bool $value ): void {
        $this->inboundConnectionsBlocked = $value;
    }

    /**
     * Sets the inboundConnectionsRequired property value. Configures the firewall to allow all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     *  @param bool|null $value Value to set for the inboundConnectionsRequired property.
    */
    public function setInboundConnectionsRequired(?bool $value ): void {
        $this->inboundConnectionsRequired = $value;
    }

    /**
     * Sets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     *  @param bool|null $value Value to set for the inboundNotificationsBlocked property.
    */
    public function setInboundNotificationsBlocked(?bool $value ): void {
        $this->inboundNotificationsBlocked = $value;
    }

    /**
     * Sets the inboundNotificationsRequired property value. Allows the firewall to display notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     *  @param bool|null $value Value to set for the inboundNotificationsRequired property.
    */
    public function setInboundNotificationsRequired(?bool $value ): void {
        $this->inboundNotificationsRequired = $value;
    }

    /**
     * Sets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     *  @param bool|null $value Value to set for the incomingTrafficBlocked property.
    */
    public function setIncomingTrafficBlocked(?bool $value ): void {
        $this->incomingTrafficBlocked = $value;
    }

    /**
     * Sets the incomingTrafficRequired property value. Configures the firewall to allow incoming traffic pursuant to other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     *  @param bool|null $value Value to set for the incomingTrafficRequired property.
    */
    public function setIncomingTrafficRequired(?bool $value ): void {
        $this->incomingTrafficRequired = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     *  @param bool|null $value Value to set for the outboundConnectionsBlocked property.
    */
    public function setOutboundConnectionsBlocked(?bool $value ): void {
        $this->outboundConnectionsBlocked = $value;
    }

    /**
     * Sets the outboundConnectionsRequired property value. Configures the firewall to allow all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     *  @param bool|null $value Value to set for the outboundConnectionsRequired property.
    */
    public function setOutboundConnectionsRequired(?bool $value ): void {
        $this->outboundConnectionsRequired = $value;
    }

    /**
     * Sets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the policyRulesFromGroupPolicyMerged property.
    */
    public function setPolicyRulesFromGroupPolicyMerged(?bool $value ): void {
        $this->policyRulesFromGroupPolicyMerged = $value;
    }

    /**
     * Sets the policyRulesFromGroupPolicyNotMerged property value. Configures the firewall to prevent merging Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     *  @param bool|null $value Value to set for the policyRulesFromGroupPolicyNotMerged property.
    */
    public function setPolicyRulesFromGroupPolicyNotMerged(?bool $value ): void {
        $this->policyRulesFromGroupPolicyNotMerged = $value;
    }

    /**
     * Sets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     *  @param bool|null $value Value to set for the securedPacketExemptionAllowed property.
    */
    public function setSecuredPacketExemptionAllowed(?bool $value ): void {
        $this->securedPacketExemptionAllowed = $value;
    }

    /**
     * Sets the securedPacketExemptionBlocked property value. Configures the firewall to block the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     *  @param bool|null $value Value to set for the securedPacketExemptionBlocked property.
    */
    public function setSecuredPacketExemptionBlocked(?bool $value ): void {
        $this->securedPacketExemptionBlocked = $value;
    }

    /**
     * Sets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     *  @param bool|null $value Value to set for the stealthModeBlocked property.
    */
    public function setStealthModeBlocked(?bool $value ): void {
        $this->stealthModeBlocked = $value;
    }

    /**
     * Sets the stealthModeRequired property value. Allow the server to operate in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     *  @param bool|null $value Value to set for the stealthModeRequired property.
    */
    public function setStealthModeRequired(?bool $value ): void {
        $this->stealthModeRequired = $value;
    }

    /**
     * Sets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     *  @param bool|null $value Value to set for the unicastResponsesToMulticastBroadcastsBlocked property.
    */
    public function setUnicastResponsesToMulticastBroadcastsBlocked(?bool $value ): void {
        $this->unicastResponsesToMulticastBroadcastsBlocked = $value;
    }

    /**
     * Sets the unicastResponsesToMulticastBroadcastsRequired property value. Configures the firewall to allow unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     *  @param bool|null $value Value to set for the unicastResponsesToMulticastBroadcastsRequired property.
    */
    public function setUnicastResponsesToMulticastBroadcastsRequired(?bool $value ): void {
        $this->unicastResponsesToMulticastBroadcastsRequired = $value;
    }

}
